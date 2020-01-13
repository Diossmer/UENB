<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use Notifiable;
    protected $guard = "persona";
    protected $table='personas';
    protected $fillable=[
        'nombres','segNombres','apellidos','segApellidos',
        'lgNacimiento','direccion','fNacimiento','email',
        'roles','edad','sexo'
    ];
    //relacion de uno a muchos con User
    public function users()
    {
        return $this->hasMany('App\User');
    }

    // relacion de uno a muchos con PersonaRole
    public function person_roles() {
        return $this->hasMany('App\PersonaRole');
    }
}
