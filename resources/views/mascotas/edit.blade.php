@extends('layout.app')

@section('title', 'Editar Mascota')

@section('content')
<h1>Editar Mascota</h1>

<form action="{{ route('mascotas.update', $mascota) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Campos del formulario -->
    <button type="submit">Actualizar Mascota</button>
</form>
@endsection
