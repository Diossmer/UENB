<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnioEscolar extends Model
{
    //
    protected $table="anio_escolars";
    protected $fillable = [
        "grado", "seccion", "fechaIngreso",
        "cedula", "matricula", "estatus",
    ];
    /*RELACIONES ONE TO MANY INVERSE
    **El Año_Escolar*/
    public function users()
    {
        //que "pertenece a un" Usuario.
        return $this->belongsTo('App\User');
    }
    /*RELACIONES ONE TO MANY
    **El año_escolars*/
    public function alumnos()
    {
        //que "tiene mucho" Alumno.
        return $this->hasMany('App\Alumno');
    }
}
