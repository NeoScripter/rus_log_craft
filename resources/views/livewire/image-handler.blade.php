<div>
    <div class="my-4">
        <label class="block text-sm font-medium text-gray-700">Добавить {{ $label }}</label>
        <input type="file" wire:model="images" multiple class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">

        @error('images.*')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-wrap items-center gap-4">
        @foreach($modelImages as $image)
            <div class="relative h-52 aspect-square">
                <img src="{{ Storage::url($image->path) }}" class="object-cover object-center w-full h-full rounded-lg shadow-lg">

                <button
                    wire:click="deleteImage({{ $image->id }})"
                    class="absolute flex items-center justify-center p-0.5 text-3xl text-white bg-red-500 rounded-full aspect-square top-1 right-1">
                    &times;
                </button>
            </div>
        @endforeach
    </div>
</div>
