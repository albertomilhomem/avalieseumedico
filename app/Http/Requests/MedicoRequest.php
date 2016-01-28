<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MedicoRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'nome' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
        'required' => 'O atributo :attribute não pode estar em branco.'
        ];
    }
}
