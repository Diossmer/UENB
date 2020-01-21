<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoEscolar extends Model
{
    //
    protected $table = "periodo_escolars";
    protected $fillable = [
        'descripcion', 'fecha_inicio', 'fecha_fin', 'estatus',
    ];
    public function seccions(){
        return $this->hasMany('App\Seccion');
    }
    public function inscripcions(){
        return $this->belongsToMany('App\Inscripcion');
    }
}
