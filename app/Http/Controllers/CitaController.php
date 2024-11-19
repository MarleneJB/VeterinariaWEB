<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitaController extends Controller
{

    public function index()
    {
        $mascotas = Mascota::all();
        $servicios = Servicio::all();
        return view('citas.create', compact('mascotas', 'servicios'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
