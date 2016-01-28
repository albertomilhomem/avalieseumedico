<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Especialidade;
use App\Clinica;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedicoController extends Controller
{
   public function index()
    {
        $medicos = Medico::orderBy('nota', 'desc')->get();

        return view('medicos.listagem')->with('medicos', $medicos);
    }

    public function show($id)
    {
        $medico = Medico::find($id);

        return view('medicos.detalhes')->with('medico', $medico);
    }
}
