<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonEscolar extends Model
{
    protected $table='person_escolar';
    protected $fillable=[
        'persona_id','anioEscolar_id'
    ];
    /*RELACIONES MANY TO MANY
    **Las person_escolar*/
    public function personas()
    {
        //esto "pertenece a muchos" Persona.
        return $this->belongsToMany('App\Persona',"persona_id");
    }
    /*RELACIONES MANY TO MANY
    **Las person_escolar*/
    public function users()
    {
        //esto "pertenece a muchos" User.
        return $this->belongsToMany('App\User');
    }
    /*RELACIONES MANY TO MANY INVERSE
    **Las person_escolar*/
    public function anio_escolars()
    {
        //esto "pertenece a muchos" AnioEscolar.
        return $this->belongsToMany('App\AnioEscolar','anioEscolar_id');
    }
}
