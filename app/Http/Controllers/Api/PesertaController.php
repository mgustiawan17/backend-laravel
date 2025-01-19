<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();
        return response()->json(['peserta' => $peserta], 200);
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
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $current_date = date('Y-m-d H:i:s');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'no_hp' => 'required|integer|max:13',
            'alamat' => 'required|string',
            'job' => 'required|string|max:255',
        ]);

        $peserta = Peserta::create([
            'name' => $validated['name'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
            'job' => $validated['job'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Peserta created successfully',
            'data' => $peserta,
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
        $peserta = Peserta::destroy($id);
    
        return response()->json(['peserta' => $peserta], 200);
    }
}
