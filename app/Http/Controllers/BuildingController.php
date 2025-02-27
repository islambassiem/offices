<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Http\Requests\UpdateBuildingRequest;
use App\Models\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = Building::all();
        return view('buildings.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuildingRequest $request)
    {
        Building::create([
            'number' => $request->number,
            'description' => $request->description
        ]);
        return redirect()->route('buildings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Building $building)
    {
        return view('buildings.show', compact('building'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Building $building)
    {
        return view('buildings.edit', compact('building'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuildingRequest $request, Building $building)
    {
        $building->update([
            'number' => $request->number,
            'description' => $request->description
        ]);
        return redirect()->route('buildings.index');
    }
}
