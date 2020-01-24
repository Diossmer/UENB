<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $table = "seccions";
    protected $fillable = [
        'descripcion', 'grado', 'cuposdisponible','docente_id','periodo_id'
    ];
    public function users(){
        return $this->belongsTo(User::class,'docente_id');
    }
    public function periodo_escolars(){
        return $this->belongsTo(PeriodoEscolar::class,'periodo_id');
    }
    public function inscripcions(){
        return $this->belongsTo(Inscripcion::class,'docente_id','periodo_id');
    }
}
