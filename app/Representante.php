<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table='representantes';
    protected $fillable=[
        'Trabajo','gradoInstruccion','ProfOcupacion','lgTrabajo','Telefonos'
    ];
    /*RELACIONES MANY TO MANY INVERSE
    **Los Represetantes*/
    public function personas()
    {
        //esto "pertenece a muchos" Persona.
        return $this->belongsToMany('App\Persona');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Los Represetantes*/
    public function alumn_repres()
    {
        //esto "pertenece a muchos" AlumnRepre.
        return $this->belongsToMany('App\AlumnRepre');
    }
}
