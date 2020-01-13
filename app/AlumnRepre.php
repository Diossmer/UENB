<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnRepre extends Model
{
    protected $table='alumn_repres';
    protected $fillable=[
        'representante_id','alumno_id'
    ];
    //relacion de uno a uno con Representante
    public function alumn_repres()
    {
        return $this->hasOne('App\Representante');
    }
}
