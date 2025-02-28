<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Building;
use App\Models\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 5;
        $sections = Section::paginate($perPage);

        return view('sections.index', compact(['sections', 'perPage']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buildings = Building::all();

        return view('sections.create', compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        Section::create([
            'building_id' => $request->building_id,
            'number' => $request->number,
            'description' => $request->description,
        ]);

        return redirect()->route('sections.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        $buildings = Building::all();

        return view('sections.edit', compact(['section', 'buildings']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $section->update([
            'building_id' => $request->building_id,
            'number' => $request->number,
            'description' => $request->description,
        ]);

        return redirect()->route('sections.index');
    }
}
