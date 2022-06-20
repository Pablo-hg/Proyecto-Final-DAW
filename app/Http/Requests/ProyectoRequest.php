<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProyectoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {

        //Nombre requerido y máximo 255 caracteres
        //Email requerido, válido, único en la tabla usuarios y máximo 255 caracteres
        $rules = [
            'titulo' => 'required|max:64',
            'entradilla' => 'required|max:255',
            'slug' => 'max:36',
            ''
        ];

        return $rules;

    }
}
