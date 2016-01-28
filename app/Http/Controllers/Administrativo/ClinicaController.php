<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use App\Clinica;
use App\Http\Requests;
use App\Http\Requests\ClinicaRequest;
use App\Http\Controllers\Controller;

class ClinicaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $clinicas = Clinica::orderBy('nome', 'asc')->get();
        return view('administrativo.clinicas.novo')->with('clinicas', $clinicas);
    }

    public function store(ClinicaRequest $request)
    {
        Clinica::create($request->all());

        return redirect()->action('Administrativo\ClinicaController@index');
    }

    public function destroy($id)
    {
        $clinica = Clinica::find($id);
        $clinica->delete();

        return redirect()->action('Administrativo\ClinicaController@index');
    }
}
