<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table='representantes';
    protected $fillable=[
        'Trabajo','gradoInstruccion','ProfOcupacion','lgTrabajo','Telefonos'
    ];
    //relacion de uno a muchos con AlumnRepre
    public function alumn_repres()
    {
        return $this->hasMany('App\AlumnRepre');
    }
}
