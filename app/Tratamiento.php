<?php

namespace ClinicaDental;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tratamiento extends Model
{
    protected $table = "tratamientos";
    protected $fillable = [
        'nombre', 'descripcion', 'imagen',
    ];
    public function setImagenAttribute($imagen){
    	$this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
    	$name = Carbon::now()->second.$imagen->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($imagen)); 
    }
}
