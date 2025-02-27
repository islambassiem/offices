<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntityRequest;
use App\Http\Requests\UpdateEntityRequest;
use App\Models\Entity;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = Entity::with('section', 'entityType')->get();
        return view('entities.index', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntityRequest $request)
    {
        Entity::create([
            'section_id' => $request->section_id,
            'entity_type_id' => $request->entity_type_id,
            'number' => $request->number,
            'singularity' => $request->singularity,
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
        return view('entities.edit', compact('entity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntityRequest $request, Entity $entity)
    {
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
