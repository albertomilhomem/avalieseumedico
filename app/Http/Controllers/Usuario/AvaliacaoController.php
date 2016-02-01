<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use Auth;
use App\Avaliacao;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AvaliacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('usuario.avaliacao.lista');
    }

    public function alterar($id)
    {
        $usuario = Auth::user();
        $avaliacao = Avaliacao::find($id);

        if ($avaliacao->user->id == $usuario->id) 
        {
            return view('usuario.avaliacao.alterar')->with('avaliacao', $avaliacao);
        }
        else
        {
            return view('usuario.avaliacao.lista');          
        }
    }

    public function salvar(Request $request)
    {
        $id = $request->id;
        $usuario = Auth::user();
        $avaliacao = Avaliacao::find($id);
        if ($avaliacao->user->id == $usuario->id) 
        {
            $avaliacao->nota = $request->nota;
            $avaliacao->comentario = $request->comentario;
            $avaliacao->save();
            return redirect()->action('Usuario\AvaliacaoController@index');
        }
        else
        {
            return redirect()->back();            
        }
    }

    public function deletar($id)
    {
        $usuario = Auth::user();
        $avaliacao = Avaliacao::find($id);

        if ($avaliacao->user->id == $usuario->id) 
        {
            $avaliacao->delete();
        }
        
        return redirect()->back();
    }
}
