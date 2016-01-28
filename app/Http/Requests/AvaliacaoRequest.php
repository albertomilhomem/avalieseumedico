<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AvaliacaoRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nota' => 'required|numeric',
            'comentario' => 'required|max:500'
        ];
    }

    public function messages()
    {
        return [
        'required' => 'O atributo :attribute não pode estar em branco.'
        ];
    }
}
