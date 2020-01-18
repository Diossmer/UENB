<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Alumno extends Model
{
    //
    protected $table="alumnos";
    protected $fillable = [
        "anioEscolar_id", "fotos", "nombres", "segNombres",
        "apellidos", "segApellidos", "lgNacimiento",
        "direccion", "fNacimiento", "email", "edad",
        "sexo", "camisas", "pantalon", "zapatos",
        "enfemPadecida", "enfemPsicologica","estatus",
    ];
    /*RELACIONES ONE TO MANY INVERSE
    **El Alumno*/
    public function anio_escolars()
    {
        //que "pertenece a un" AñoEscolar.
        return $this->belongsTo('App\AnioEscolar',"anioEscolar_id");
    }
    /*RELACIONES ONE TO MANY INVERSE
    **El Alumno*/
    public function representantes()
    {
        //que "pertenece a un" Representante.
        return $this->belongsTo('App\Representante',"anioEscolar_id");
    }
}
