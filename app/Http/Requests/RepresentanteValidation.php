<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepresentanteValidation extends FormRequest
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
            // 'segundo_nombre'=>'required',
            'apellido'=>'required',
            // 'segundo_apellido'=>'required',
            'cedula'=>'required|numeric',
            'email'=>'required|email',
            'fecha_nacimiento'=>'required|date',
            'trabajo'=>'required',
            'grado_instruccion'=>'required',
            'profesion_ocupacion'=>'required',
            'lugar_trabajo'=>'required',
            'telefono'=>'required|numeric',
            'sexo'=>'required'
        ];
    }
}
