<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Mascota;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Cita::with('mascota')->get();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $mascotas = Mascota::all();
        return view('citas.create', compact('mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'servicio' => 'required',
            'fecha_hora' => 'required|date',
            'estado' => 'required',
        ]);

        Cita::create($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita agendada correctamente');
    }

    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        $mascotas = Mascota::all();
        return view('citas.edit', compact('cita', 'mascotas'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'servicio' => 'required',
            'fecha_hora' => 'required|date',
            'estado' => 'required',
        ]);

        $cita->update($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada correctamente');
    }
}
