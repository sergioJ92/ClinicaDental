<?php

namespace ClinicaDental;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";

    protected $fillable = [
    	"nombre","apellido","usuario","password","email"
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($valor){
    	if(!empty($valor)){
    		$this->attributes['password'] = \Hash::make($valor);
    	}
    }
}
