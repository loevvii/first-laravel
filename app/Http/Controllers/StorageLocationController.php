<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StorageLocation;

class StorageLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storageLocations = StorageLocation::all();
        // dd ($storageLocations, compact('storageLocations'));
        return view('storage-locations', compact('storageLocations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('storage-locations-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'capacity_small' => 'required|integer',
            'capacity_medium' => 'required|integer',
            'capacity_large' => 'required|integer',
        ]);
        StorageLocation::create($validatedData);
        return redirect()->route('storage-locations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
