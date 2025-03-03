<?php

namespace App\Livewire;

use App\Models\Building;
use App\Models\Entity;
use App\Models\EntityType;
use App\Models\Section;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEntities extends Component
{

    use WithPagination;

    public $building;

    public $section;

    public $type;

    public $perPage = 10;

    #[Computed()]
    public function buildings()
    {
        return Building::select('id', 'number')->get();
    }
    #[Computed()]
    public function sections()
    {
        return Section::select('id', 'number')->get();
    }
    #[Computed()]
    public function types()
    {
        return EntityType::select('id', 'name')->get();
    }

    public function render()
    {
        $entities = Entity::withCount('users')
            ->when($this->building, function ($query) {
                return $query->where('building_id', $this->building);
            })
            ->when($this->section, function ($query) {
                return $query->where('section_id', $this->section);
            })
            ->when($this->type, function ($query) {
                return $query->where('entity_type_id', $this->type);
            })
            ->paginate($this->perPage);

        return view('livewire.show-entities', [
            'entities' => $entities,
        ]);
    }
}
