@extends('layout.app')

@section('title', 'Agregar Mascota')

@section('content')
<h1 class="text-2xl font-bold mb-4">Agregar Mascota</h1>
<form action="{{ url('/mascotas') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label class="block text-gray-700">Nombre:</label>
        <input type="text" name="nombre" required class="border rounded px-3 py-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Especie:</label>
        <input type="text" name="especie" required class="border rounded px-3 py-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Raza:</label>
        <input type="text" name="raza" required class="border rounded px-3 py-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Edad en meses:</label>
        <input type="number" name="edad" required class="border rounded px-3 py-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Dueño:</label>
        <input type="text" name="nombre_dueno" required class="border rounded px-3 py-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Teléfono:</label>
        <input type="tel" name="telefono" required class="border rounded px-3 py-2 w-full">
    </div>

    <div>
        <label class="block text-gray-700">Imagen:</label>
        <input type="file" name="imagen" class="block mt-1">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar Mascota</button>
</form>
@endsection
