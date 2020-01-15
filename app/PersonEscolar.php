<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonRole extends Model
{
    protected $table='person_escolar';
    protected $fillable=[
        'persona_id','anioEscolar_id'
    ];

}
