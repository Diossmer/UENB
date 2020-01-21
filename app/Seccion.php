<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $table = "seccions";
    protected $fillable = [
        'descripcion', 'grado', 'cuposdisponible','docente_id','periodo_id',
    ];
    public function users(){
        return $this->belongsTo('App\User','docente_id');
    }
    public function periodo_escolars(){
        return $this->belongsTo('App\PeriodoEscolar','periodo_id');
    }
    public function inscripcions(){
        return $this->belongsToMany('App\Inscripcion');
    }
}
