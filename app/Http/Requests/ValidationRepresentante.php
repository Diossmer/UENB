<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRepresentante extends FormRequest
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
            //Representante
            "alumno_id"=>"required",
            "nombres"=>"required",
            "segNombres"=>"required",
            "apellidos"=>"required",
            "segApellidos"=>"required",
            "fNacimiento"=>"required",
            "email"=>"email|required",
            "trabajo"=>"required",
            "gradoInstruccion"=>"required",
            "profOcupacion"=>"required",
            "lgTrabajo"=>"required",
            "telefonos"=>"required|numeric",
        ];
    }
}
