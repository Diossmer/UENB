<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumnos';
    protected $fillable=[
        'camisas','pantalon','zapatos','enfemPadecida','enfemPsicologica'
    ];
    //relacion de uno a uno con AlumnRepre
    public function alumn_repres()
    {
        return $this->hasOne('App\AlumnRepre');
    }
}
