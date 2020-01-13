<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnioEscolar extends Model
{
    protected $table='anio_escolars';
    protected $fillable=[
        'cedula','fechaIngreso','fechaEngreso','grado','seccion','estatus'
    ];
    //relacion de uno a muchos con PersonaRole
    public function personroles()
    {
        return $this->hasMany('App\PersonaRole');
    }
}
