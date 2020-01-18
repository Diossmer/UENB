<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table="alumnos";
    protected $fillable = [
        "añoEscolar_id", "fotos", "nombres", "segNombres",
        "apellidos", "segApellidos", "lgNacimiento",
        "direccion", "fNacimiento", "email", "edad",
        "sexo", "camisas", "pantalon", "zapatos",
        "enfemPadecida", "enfemPsicologica",
    ];
    /*RELACIONES ONE TO MANY INVERSE
    **El Alumno*/
    public function año_escolars()
    {
        //que "pertenece a un" AñoEscolar.
        return $this->belongsTo('App\AñoEscolar',"añoEscolar_id");
    }
    /*RELACIONES ONE TO MANY INVERSE
    **El Alumno*/
    public function representantes()
    {
        //que "pertenece a un" Representante.
        return $this->belongsTo('App\Representante',"añoEscolar_id");
    }
}
