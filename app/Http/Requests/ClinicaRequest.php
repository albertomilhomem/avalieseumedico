<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClinicaRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'telefone' => 'required|max:14',
            'rua' => 'required|max:100',
            'bairro' => 'required:max:30',
            'numero' => 'required:numeric:4', 
            //
        ];
    }

    public function messages()
    {
        return [
        'required' => 'O atributo :attribute não pode estar em branco.'
        ];
    }
}
