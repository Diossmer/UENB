<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    //
    protected $table = "representantes";
    protected $fillable =[
        'nombre','segundo_nombre','apellido','segundo_apellido',
        'cedula','email','fecha_nacimiento','trabajo',
        'grado_instruccion','profesion_ocupacion','lugar_trabajo',
        'telefono','sexo'
    ];
    public function alumnos(){
        return $this->hasMany('App\Alumno');
    }
}
