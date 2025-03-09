<?php
namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectFilters extends Component
{
    use WithPagination;

    public $type = '';
    public $floors = '';
    public $area = '';
    public $hasTerrace = false;
    public $hasGarage = false;

    public function updating()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['type', 'floors', 'area', 'hasTerrace', 'hasGarage']);
    }

    public function render()
    {
        $query = Project::query();

        if ($this->type && $this->type !== 'all') {
            $query->where('type', $this->type);
        }

        if ($this->floors && $this->floors !== 'all') {
            $query->where('floors', $this->floors);
        }

        if ($this->area && $this->area !== 'all') {
            match ($this->area) {
                'lt50' => $query->where('total_area', '<', 50),
                '50to130' => $query->whereBetween('total_area', [50, 130]),
                '130to190' => $query->whereBetween('total_area', [130, 190]),
                'gt190' => $query->where('total_area', '>', 190),
            };
        }

        if ($this->hasTerrace) {
            $query->where('has_terrace', true);
        }

        if ($this->hasGarage) {
            $query->where('has_garage', true);
        }

        return view('livewire.project-filters', [
            'projects' => $query->latest()->paginate(20)
        ]);
    }
}
