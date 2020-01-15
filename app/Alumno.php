<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumnos';
    protected $fillable=[
        'persona_id','representante_id','camisas','pantalon','zapatos','enfemPadecida','enfemPsicologica'
    ];
    /*RELACIONES ONE TO MANY INVERSE
    **Los Alumnos*/
    public function users()
    {
        //que "pertenece a un" Usuario.
        return $this->belongsTo('App\User','persona_id','representante_id');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Los Alumnos*/
    public function personas()
    {
        //esto "pertenece a muchas" Persona.
        return $this->belongsToMany('App\Persona','persona_id','representante_id');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Los Alumnos*/
    public function representantes()
    {
        //esto "pertenece a muchos" Representante.
        return $this->belongsToMany('App\Representante','persona_id','representante_id');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Los alumnos
    public function alumn_repres()
    //{
        //esto "pertenece a muchos" AlumnRepre.
        return $this->belongsToMany('App\AlumnRepre');
    }*/
}
