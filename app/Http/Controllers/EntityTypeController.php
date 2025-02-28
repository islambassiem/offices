<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntityTypeRequest;
use App\Http\Requests\UpdateEntityTypeRequest;
use App\Models\EntityType;

class EntityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entityTypes = EntityType::all();

        return view('entityTypes.index', compact('entityTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entityTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntityTypeRequest $request)
    {
        EntityType::create([
            'name' => $request->name,
        ]);

        return redirect()->route('entityTypes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EntityType $entityType)
    {
        return view('entityTypes.show', compact('entityType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EntityType $entityType)
    {
        return view('entityTypes.edit', compact('entityType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntityTypeRequest $request, EntityType $entityType)
    {
        $entityType->update([
            'name' => $request->name,
        ]);

        return redirect()->route('entityTypes.index');
    }
}
