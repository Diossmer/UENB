<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AñoEscolar extends Model
{
    //
    protected $table="año_escolars";
    protected $fillable = [
        "users_id", "grado", "seccion", "fechaIngreso",
        "cedula", "matricula", "estatus",
    ];
    /*RELACIONES ONE TO MANY INVERSE
    **El Año_Escolar*/
    public function users()
    {
        //que "pertenece a un" Usuario.
        return $this->belongsTo('App\User','users_id');
    }
    /*RELACIONES ONE TO MANY
    **El año_escolars*/
    public function alumnos()
    {
        //que "tiene mucho" Alumno.
        return $this->hasMany('App\Alumno',"users_id");
    }
}
