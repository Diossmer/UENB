<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoValidation extends FormRequest
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
            //
            'nombre'=>'required',
            'segundo_nombre'=>'required',
            'apellido'=>'required',
            'segundo_apellido'=>'required',
            'lugar_nacimiento'=>'required',
            'direccion'=>'required',
            'dia'=>'required',
            'mes'=>'required',
            'año'=>'required',
            'sexo'=>'required',
            'camisa'=>'required',
            'pantalon'=>'required',
            'zapato'=>'required',
            'fotos'=>'required',
            'enfermedades_padecida'=>'required',
            'enfermedades_psicologica'=>'required',
            'representante_id'=>'required'
        ];
    }
}
