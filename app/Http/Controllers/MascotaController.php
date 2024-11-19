<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mascota::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre' => 'required|string|max:100',
        'especie' => 'required|string|max:50',
        'raza' => 'nullable|string|max:50',
        'edad' => 'required|integer',
        'nombre_dueno' => 'required|string|max:100',
        'telefono' => 'required|string|max:15',
        'imagen' => 'nullable|string|max:255',
    ]);

    $mascota = Mascota::create($request->all());
    return response()->json($mascota, 201);
    }


    public function show(string $id)
    {
        return Mascota::findOrFail($id);
    }


    public function update(Request $request, string $id)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota->update($request->all());
        return response()->json($mascota, 200);
    }

    /*
     */
    public function destroy(string $id)
    {
        Mascota::destroy($id);
        return response()->json(null, 204);
    }
}
