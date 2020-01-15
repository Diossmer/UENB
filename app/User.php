<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellido', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*RELACIONES ONE TO ONE INVERSE
    **Los Usuarios*/
    public function admins()
    {
        //que "pertenece a un" Admin.
        return $this->belongsTo('App\Admin');
    }
    /*RELACIONES ONE TO MANY
    **Los Usuarios*/
    public function personas()
    {
        //que "tiene mucha" Persona.
        return $this->hasMany('App\Persona');
    }
    /*RELACIONES ONE TO MANY
    **Los Usuarios*/
    public function alumnos()
    {
        //que "tiene mucho" Alumno.
        return $this->hasMany('App\Alumno');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Los Usuarios
    public function person_escolar()
    {
        //esto "pertenece a muchos" PersonEscolar.
        return $this->belongsToMany('App\PersonEscolar');
    }*/
    /*RELACIONES MANY TO MANY
    **Los Usuarios
    public function alumn_repres()
    {*/
        //esto "pertenece a muchos" AlumnRepre.
        //return $this->belongsToMany('App\AlumnRepre');
    //}

}
