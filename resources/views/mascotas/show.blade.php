@extends('layout.app')

@section('title', 'Detalles de la Mascota')

@section('content')
<h1>Detalles de {{ $mascota->nombre }}</h1>
<p>Especie: {{ $mascota->especie }}</p>
<p>Raza: {{ $mascota->raza }}</p>
<p>Edad: {{ $mascota->edad }} meses</p>
<p>Dueño: {{ $mascota->nombre_dueno }}</p>
<p>Teléfono: {{ $mascota->telefono }}</p>
@if($mascota->imagen)
    <img src="{{ asset('storage/' . $mascota->imagen) }}" width="200">
@endif
<a href="{{ route('mascotas.index') }}">Regresar</a>
@endsection
