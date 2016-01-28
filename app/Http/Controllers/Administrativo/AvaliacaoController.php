<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use App\Avaliacao;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AvaliacaoController extends Controller
{
    public function index()
    {
        $avaliacoes = Avaliacao::all();
        return view('administrativo.avaliacoes.listagem')->with('avaliacoes', $avaliacoes);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $avaliacao = Avaliacao::find($id);

        if(empty($avaliacao))
        {
            $Errors = "Avaliação não existente!"; 
            return redirect()->action('Administrativo\AvaliacaoController@index')->with('Errors', $Errors);
        }
        
        return view('administrativo.avaliacoes.detalhes')->with('avaliacao', $avaliacao);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $avaliacao = Avaliacao::find($id);
        $avaliacao->delete();

        return redirect()->action('Administrativo\AvaliacaoController@index');
    }
}
