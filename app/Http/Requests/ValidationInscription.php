<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationInscription extends FormRequest
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
            //Año escolar
            "grado"=>"required|numeric",
            "seccion"=>"required|alpha",
            "fechaIngreso"=>"required",
            "cedula"=>"integer|required",
            "matricula"=>"integer|required",
        ];
    }
}
