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
        $storageLocation = StorageLocation::findOrFail($id);
        // dd($storageLocation);
        return view('storage-locations-show', compact('storageLocation'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $storageLocation = StorageLocation::findOrFail($id);
        // dd($storageLocation);
        return view('storage-locations-edit', compact('storageLocation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'capacity_small' => 'required|integer',
                'capacity_medium' => 'required|integer',
                'capacity_large' => 'required|integer',
            ]);
            $storageLocation = StorageLocation::findOrFail($id);
            $storageLocation->update($validatedData);
            return redirect()->route('storage-locations.show', $storageLocation->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
