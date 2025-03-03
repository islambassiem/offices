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
        $perPage = 10;
        $types = EntityType::paginate($perPage);

        return view('entityTypes.index', compact(['types', 'perPage']));
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

        return redirect()->route('types.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EntityType $type)
    {
        return view('entityTypes.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntityTypeRequest $request, EntityType $type)
    {
        $type->update([
            'name' => $request->name,
        ]);

        return redirect()->route('types.index');
    }
}
