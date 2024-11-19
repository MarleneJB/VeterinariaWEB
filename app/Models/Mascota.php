<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascotas';

    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
        'nombre_dueno',
        'telefono',
        'imagen'
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'mascota_id');
    }
}
