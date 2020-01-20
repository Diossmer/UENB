<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationAlumno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //Alumno
            "anioEscolar_id"=>"required",
            "fotos"=>"required",
            "nombres"=>"required",
            "segNombres"=>"required",
            "apellidos"=>"required",
            "segApellidos"=>"required",
            "lgNacimiento"=>"required",
            "direccion"=>"required",
            "fNacimiento"=>"required",
            "email"=>"required",
            "dia"=>"required",
            "mes"=>"required",
            "anio"=>"required",
            "sexo"=>"required",
            "camisas"=>"required",
            "pantalon"=>"required",
            "zapatos"=>"required",
            "enfemPadecida"=>"required",
            "enfemPsicologica"=>"required",
            "estatus"=>"required",
        ];
    }
}
