<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\CitasController;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// Rutas de recurso para mascotas
Route::resource('mascotas', MascotasController::class)->names([
    'index' => 'mascotas.index',
    'create' => 'mascotas.create',
    'store' => 'mascotas.store',
    'show' => 'mascotas.show',
    'edit' => 'mascotas.edit',
    'update' => 'mascotas.update',
    'destroy' => 'mascotas.destroy'
]);

// Rutas de recurso para servicios
Route::resource('servicios', ServiciosController::class)->names([
    'index' => 'servicios.index',
    'create' => 'servicios.create',
    'store' => 'servicios.store',
    'show' => 'servicios.show',
    'edit' => 'servicios.edit',
    'update' => 'servicios.update',
    'destroy' => 'servicios.destroy'
]);

// Rutas de recurso para citas
Route::resource('citas', CitasController::class)->names([
    'index' => 'citas.index',
    'create' => 'citas.create',
    'store' => 'citas.store',
    'show' => 'citas.show',
    'edit' => 'citas.edit',
    'update' => 'citas.update',
    'destroy' => 'citas.destroy'
]);
