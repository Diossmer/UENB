<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnioEscolar extends Model
{
    protected $table='anio_escolars';
    protected $fillable=[
        'persona_id', 'fechaIngreso','fechaEngreso','grado','seccion','estatus'
    ];
    /*RELACIONES MANY TO ONE INVERSE
    **El Año_Escolar*/
    public function personas()
    {
        //esto "pertenece a un" Persona.
        return $this->belongsTo('App\Personas');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **El Año_Escolar*/
    public function person_escolar()
    {
        //esto "pertenece a muchos" PersonEscolar.
        return $this->belongsToMany('App\PersonEscolar');
    }
}
