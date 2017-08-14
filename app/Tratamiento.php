<?php

namespace ClinicaDental;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = "tratamientos";
    protected $fillable = [
        'nombre', 'descripcion', 'imagen',
    ];
}
