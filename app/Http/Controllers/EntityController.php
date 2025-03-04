<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntityRequest;
use App\Http\Requests\UpdateEntityRequest;
use App\Models\Building;
use App\Models\Entity;
use App\Models\EntityType;
use App\Models\Section;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('entities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buildings = Building::all();
        $sections  = Section::all();
        $types     = EntityType::all();
        return view('entities.create',
            compact(
                'buildings',
                'sections',
                'types',
            ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntityRequest $request)
    {
        Entity::create([
            'building_id' => $request->building_id,
            'section_id' => $request->section_id,
            'entity_type_id' => $request->entity_type_id,
            'number' => $request->number,
            'singularity' => $request->singularity ?? 0,
            'keys_count' => $request->keys_count,
            'description' => $request->description,
        ]);

        return redirect()->route('entities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entity $entity)
    {
        return view('entities.show', compact('entity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entity $entity)
    {
        $buildings = Building::all();
        $sections  = Section::all();
        $types     = EntityType::all();
        return view('entities.edit',
            compact(
                'entity',
                'buildings',
                'sections',
                'types',
            ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntityRequest $request, Entity $entity)
    {
        return $request;
        $entity->update([
            'section_id' => $request->section_id,
            'entity_type_id' => $request->entity_type_id,
            'number' => $request->number,
            'singularity' => $request->singularity,
            'keys_count' => $request->keys_count,
            'description' => $request->description,
        ]);

        return redirect()->route('entities.index');
    }
}
