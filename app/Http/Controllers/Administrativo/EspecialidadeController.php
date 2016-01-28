<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use App\Especialidade;

use App\Http\Requests;
use App\Http\Requests\EspecialidadeRequest;
use App\Http\Controllers\Controller;

class EspecialidadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $especialidades = Especialidade::all();
        return view('administrativo.especialidades.novo')->with('especialidades', $especialidades);
    }

    public function store(EspecialidadeRequest $request)
    {
        Especialidade::create($request->all());

        $especialidades = Especialidade::all();

        return redirect()->action('Administrativo\EspecialidadeController@index');
    }

    public function destroy($id)
    {
        $especialidade = Especialidade::find($id);
        $especialidade->delete();

        return redirect()->action('Administrativo\EspecialidadeController@index');
    }
}
