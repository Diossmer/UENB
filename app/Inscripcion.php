<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    //
    protected $table="inscripcions";
    protected $fillable=[
        'matricula','periodoescolar_id','alumno_id','seccion_id'
    ];
    public function periodo_escolars(){
        return $this->belongsToMany('App\PeriodoEscolar');
    }
    public function alumnos(){
        return $this->belongsToMany('App\Alumno');
    }
    public function seccions(){
        return $this->belongsToMany('App\Seccion');
    }
}
