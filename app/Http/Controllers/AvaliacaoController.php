<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Avaliacao;
use App\Medico;
use App\Http\Requests;
use App\Http\Requests\AvaliacaoRequest;
use App\Http\Controllers\Controller;

class AvaliacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create($id)
    {
        $medico = Medico::find($id);
        return view('avaliacoes.novo')->with('medico', $medico);
    }

    public function store(AvaliacaoRequest $request)
    {
        Avaliacao::create($request->all());
        return redirect()->action('MedicoController@show', $request->medico_id);
    }
}
