@extends('layout.app')

@section('title', 'Mascotas')

@section('content')
<h1>Mascotas</h1>
<a href="{{ route('mascotas.create') }}">Agregar Mascota</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad (meses)</th>
            <th>Dueño</th>
            <th>Teléfono</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->especie }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->edad }}</td>
            <td>{{ $mascota->nombre_dueno }}</td>
            <td>{{ $mascota->telefono }}</td>
            <td><img src="{{ asset('storage/' . $mascota->imagen) }}" width="100"></td>
            <td>
                <a href="{{ route('mascotas.edit', $mascota) }}">Editar</a>
                <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar esta mascota?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
