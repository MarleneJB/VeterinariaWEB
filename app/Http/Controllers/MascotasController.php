<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MascotasController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required|integer',
            'nombre_dueno' => 'required',
            'telefono' => 'required',
            'imagen' => 'nullable|image',
        ]);

        $mascota = new Mascota($request->all());
        if ($request->hasFile('imagen')) {
            $mascota->imagen = $request->file('imagen')->store('imagenes', 'public');
        }
        $mascota->save();

        return redirect()->route('mascotas.index')->with('success', 'Mascota agregada correctamente');
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required|integer',
            'nombre_dueno' => 'required',
            'telefono' => 'required',
            'imagen' => 'nullable|image',
        ]);

        $mascota->update($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            if ($mascota->imagen) {
                Storage::disk('public')->delete($mascota->imagen);
            }
            $mascota->imagen = $request->file('imagen')->store('imagenes', 'public');
        }

        $mascota->save();

        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada correctamente');
    }

    public function destroy(Mascota $mascota)
    {
        if ($mascota->imagen) {
            Storage::disk('public')->delete($mascota->imagen);
        }
        $mascota->delete();
        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada correctamente');
    }
}
