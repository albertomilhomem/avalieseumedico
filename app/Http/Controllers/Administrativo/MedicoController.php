<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use App\Medico;
use App\Clinica;
use App\Especialidade;

use App\Http\Requests\MedicoRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
	public function index()
    {
        $medicos = Medico::all();
        $especialidades = Especialidade::all();
        $clinicas = Clinica::all();

        return view('administrativo.medicos.novo', [
            'especialidades' => $especialidades, 
            'clinicas' => $clinicas,
            'medicos' => $medicos
            ]);

    }

    public function store(MedicoRequest $request)
    {
        Medico::create($request->all());

        return redirect()->action('Administrativo\MedicoController@index');
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
        $medico = Medico::find($id);
        $medico->delete();

        return redirect()->action('Administrativo\MedicoController@index');
    }    
}
