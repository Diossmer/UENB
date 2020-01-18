<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table="alumnos";
    protected $fillable = [
        "anioEscolar_id", "fotos", "nombres", "segNombres",
        "apellidos", "segApellidos", "lgNacimiento",
        "direccion", "fNacimiento", "email", "edad",
        "sexo", "camisas", "pantalon", "zapatos",
        "enfemPadecida", "enfemPsicologica",
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
