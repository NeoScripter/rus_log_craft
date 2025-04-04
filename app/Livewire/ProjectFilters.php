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
    public $perPage = 20;

    public $search = '';

    public function mount()
    {
        $this->type = request()->query('type', '');
        $this->search = request()->query('search', '');
    }

    public function setPerPage($screenSize)
    {

        if ($screenSize < 768) {
            $this->perPage = 5;
        } else if (($screenSize < 1024)) {
            $this->perPage = 10;
        } else {
            $this->perPage = 15;
        }

        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['type', 'floors', 'area', 'hasTerrace', 'hasGarage', 'search']);

    }

    public function render()
    {
        $query = Project::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('article', 'LIKE', "%{$this->search}%")
                  ->orWhere('name_ru', 'LIKE', "%{$this->search}%")
                  ->orWhere('name_en', 'LIKE', "%{$this->search}%")
                  ->orWhere('name_cn', 'LIKE', "%{$this->search}%")
                  ->orWhere('name_jp', 'LIKE', "%{$this->search}%");
            });
        }

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

        $this->dispatch('clearUrlParams');
        $this->dispatch('scroll-to-top');

        return view('livewire.project-filters', [
            'projects' => $query->latest()->with('firstImage')->paginate($this->perPage)
        ]);
    }
}
