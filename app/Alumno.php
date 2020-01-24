<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table = "alumnos";
    protected $fillable = [
        'nombre', 'segundo_nombre', 'apellido', 'segundo_apellido',
        'lugar_nacimiento','direccion','dia','mes','año','cedula',
        'email','sexo','camisa','pantalon','zapato','fotos',
        'enfermedades_padecida','enfermedades_psicologica','representante_id'
    ];
    public function representantes(){
        return $this->belongsTo(Representante::class,'representante_id');
    }
    public function inscripcions(){
        return $this->belongsTo(Inscripcion::class);
    }
}
