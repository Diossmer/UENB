<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumnos';
    protected $fillable=[
        'camisas','pantalon','zapatos','enfemPadecida','enfemPsicologica'
    ];
    /*RELACIONES MANY TO MANY INVERSE
    **Los Alumnos*/
    public function personas()
    {
        //esto "pertenece a muchas" Persona.
        return $this->belongsToMany('App\Persona');
    }
}
