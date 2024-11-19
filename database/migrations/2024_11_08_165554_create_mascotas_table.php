<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre de la mascota
            $table->string('especie'); // Especie (e.g., perro, gato)
            $table->string('raza'); // Raza de la mascota
            $table->integer('edad'); // Edad de la mascota
            $table->string('nombre_dueno'); // Nombre del dueño
            $table->string('telefono', 15); // Número de teléfono del dueño
            $table->string('imagen')->nullable(); // Imagen de la mascota (ruta de archivo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
