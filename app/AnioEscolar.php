<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnioEscolar extends Model
{
    protected $table='anio_escolars';
    protected $fillable=[
        'cedula','fechaIngreso','fechaEngreso','grado','seccion','estatus'
    ];
    /*RELACIONES MANY TO ONE INVERSE
    **Las Personas*/
    public function anio_escolars()
    {
        //esto "pertenece a un" Año_Escolar.
        return $this->belongsTo('App\AnioEscolar');
    }
}
