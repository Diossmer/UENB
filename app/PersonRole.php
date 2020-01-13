<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonRole extends Model
{
    protected $table='person_roles';
    protected $fillable=[
        'persona_id','anioEscolar_id'
    ];
    //relacion de uno a uno con Persona
    public function personas()
    {
        return $this->hasOne('App\Persona');
    }
    //relacion de uno a uno con Persona
    public function personas()
    {
        return $this->hasOne('App\Persona');
    }
}
