<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnRepre extends Model
{
    protected $table='alumn_repres';
    protected $fillable=[
        'representante_id','alumno_id'
    ];
    /*RELACIONES MANY TO MANY
    **Los alumn_repres*/
    public function representantes()
    {
        //esto "pertenece a muchos" Representante.
        return $this->belongsToMany('App\Representante');
    }
    /*RELACIONES MANY TO MANY
    **Los alumn_repres*/
    public function users()
    {
        //esto "pertenece a muchos" User.
        return $this->belongsToMany('App\User');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Los alumn_repres*/
    public function alumnos()
    {
        //esto "pertenece a muchos" Alumno.
        return $this->belongsToMany('App\Alumno');
    }
}
