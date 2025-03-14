<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use Livewire\Attributes\Validate;

class ImageHandler extends Component
{
    use WithFileUploads;

    public $model;
    public int $modelId;
    public string $type;
    public string $label;

    public bool $isUploading = false;

    #[Validate(['images.*' => 'image|max:2048'])]
    public array $images = [];

    public function mount(string $model, int $modelId, string $type)
    {
        $modelClass = "App\\Models\\" . ucfirst($model);

        if (!class_exists($modelClass)) {
            abort(404, "Model {$modelClass} not found.");
        }

        $this->model = $modelClass::findOrFail($modelId);
        $this->modelId = $modelId;
        $this->type = $type;
    }

    public function updatedImages()
    {
        $this->isUploading = true;

        $this->validate();

        foreach ($this->images as $image) {
            $path = $image->store($this->getStoragePath(), 'public');

            $nextOrder = Image::where([
                'type' => $this->type,
                $this->model->getForeignKey() => $this->modelId
            ])->max('order') + 1;

            Image::create([
                $this->model->getForeignKey() => $this->modelId,
                'path' => $path,
                'type' => $this->type,
                'order' => $nextOrder ?? 1,
            ]);
        }

        $this->images = [];
        $this->isUploading = false;
        $this->dispatch('imagesUpdated');
    }

    public function deleteImage(int $imageId)
    {
        $image = Image::findOrFail($imageId);

        if ($image->{$this->model->getForeignKey()} !== $this->modelId) {
            return;
        }

        Storage::disk('public')->delete($image->path);
        $image->delete();

        $this->reorderImages();
        $this->dispatch('imagesUpdated');
    }

    private function reorderImages()
    {
        $images = Image::where([
            $this->model->getForeignKey() => $this->modelId,
            'type' => $this->type
        ])->orderBy('order', 'asc')->get();

        foreach ($images as $index => $img) {
            $img->update(['order' => $index + 1]);
        }
    }

    private function getStoragePath(): string
    {
        return strtolower(class_basename($this->model)) . '/' . $this->modelId;
    }

    public function render()
    {
        return view('livewire.image-handler', [
            'modelImages' => Image::where([
                $this->model->getForeignKey() => $this->modelId,
                'type' => $this->type
            ])->orderBy('order', 'asc')->get(),
            'label' => $this->label,
        ]);
    }
}
