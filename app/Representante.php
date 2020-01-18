<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    //
    protected $table="representantes";
    protected $fillable = [
        "alumno_id", "nombres", "segNombres", "apellidos",
        "segApellidos", "fNacimiento", "email",
        "trabajo", "gradoInstruccion", "profOcupacion",
        "lgTrabajo", "telefonos",
    ];
    /*RELACIONES ONE TO MANY
    **El Representante*/
    public function alumnos()
    {
        //que "tiene mucho" Alumno.
        return $this->hasMany('App\Alumno',"alumno_id");
    }
}
