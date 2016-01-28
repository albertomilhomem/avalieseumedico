<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Especialidade;
use App\Clinica;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.inicio');
    }

    public function sobre()
    {
        return view('home.sobre');
    }

    public function contato()
    {
        return view('home.contato');
    }

    public function busca(Request $request)
    {        
        $nome = $request->nome;

        if (!($nome == "")) 
        {       
            $medicos = Medico::where('nome', 'LIKE', '%'. $nome .'%')->get();
            $clinicas = Clinica::where('nome', 'LIKE', '%'. $nome . '%')->get();
            $especialidades = Especialidade::where('nome', 'LIKE', '%'. $nome .'%')->get();

            return view('home.busca', array('medicos' => $medicos, 'especialidades' => $especialidades, 'clinicas' => $clinicas, 'nome'=>$nome));
        }
        else
        {
            return redirect()->back();
        }
    }
}
