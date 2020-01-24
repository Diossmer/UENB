<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    //
    protected $table="inscripcions";
    protected $fillable=[
        'estatus_id','alumno_id','seccion_id'
    ];
    public function periodo_escolars(){
        return $this->hasMany(PeriodoEscolar::class,'estatus_id','seccion_id','alumno_id');
    }
    public function alumnos(){
        return $this->hasMany(Alumno::class,'alumno_id','seccion_id','estatus_id');
    }
    public function seccions(){
        return $this->hasMany(Seccion::class,'seccion_id','estatus_id','alumno_id');
    }
}
