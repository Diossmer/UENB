<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $guard = "personas";
    protected $table='personas';
    protected $fillable=[
        'nombres','segNombres','apellidos','segApellidos',
        'cedula','lgNacimiento','direccion','fNacimiento',
        'email','roles','edad','sexo'
    ];
    /*RELACIONES ONE TO MANY INVERSE
    **Las Personas*/
    public function users()
    {
        //que "pertenece a un" Usuario.
        return $this->belongsTo('App\User');
    }
    /*RELACIONES MANY TO MANY
    **Las Personas*/
    public function representantes()
    {
        //esto "pertenece a muchos" Representante.
        return $this->belongsToMany('App\Representante');
    }
    /*RELACIONES MANY TO MANY
    **Las Personas*/
    public function alumnos()
    {
        //esto "pertenece a muchos" Alumno.
        return $this->belongsToMany('App\Alumno');
    }
    /*RELACIONES MANY TO ONE
    **Las Personas*/
    public function anio_escolars()
    {
        //esto "pertenece a un" Año_Escolar.
        return $this->belongsTo('App\AnioEscolar');
    }
}
