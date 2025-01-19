<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modul = Modul::all();
        return response()->json(['modul' => $modul], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $current_date = date('Y-m-d H:i:s');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'materi' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'name_pemateri' => 'required|string|max:255',
        ]);

        $modul = Modul::create([
            'name' => $validated['name'],
            'jenis' => $validated['jenis'],
            'materi' => $validated['materi'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'name_pemateri' => $validated['name_pemateri'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Check-in created successfully',
            'data' => $modul,
        ], 201);
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
        $modul = modul::destroy($id);
    
        return response()->json(['modul' => $modul], 200);
    }
}
