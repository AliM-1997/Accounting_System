<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use App\Http\Requests\StoreBranchesRequest;
use App\Http\Requests\UpdateBranchesRequest;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Branches::all(), 200);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchesRequest $request)
{
    $validated = $request->validated();

    $branch = Branches::create([
        'name' => $validated['name'],
        'location' => $validated['location'],
    ]);

    return response()->json([
        'message' => 'Branch created successfully.',
        'data' => $branch
    ], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(Branches $branches)
    {
        return response()->json($branches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branches $branches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchesRequest $request, Branches $branches)
    {
        $validated = $request->validated();

        $branches->update($validated);

        return response()->json([
            'message' => 'Branch updated successfully',
            'branch'  => $branches,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branches $branches)
{
    $branches->delete();

    return response()->json([
        'message' => 'Branch deleted successfully',
    ]);
}
}
