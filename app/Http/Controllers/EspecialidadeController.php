<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidade;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EspecialidadeController extends Controller
{
   public function index()
    {
        $especialidades = Especialidade::orderBy('nome', 'asc')->get();

        return view('especialidades.listagem')->with('especialidades', $especialidades);
    }

    public function show($id)
    {
        $especialidade = Especialidade::find($id);

        return view('especialidades.detalhes')->with('especialidade', $especialidade);
    }
    
}
