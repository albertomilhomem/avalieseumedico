<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinica;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicas = Clinica::orderBy('nome', 'asc')->get();
        return view('clinicas.listagem')->with('clinicas', $clinicas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinica = Clinica::find($id);
        if (!empty($clinica)) 
        {
            return view('clinicas.detalhes')->with('clinica', $clinica);
        }
        else
        {
            return view('errors.404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinica = Clinica::find($id);
        $clinica->delete();

        return redirect()->action('ClinicaController@create');
    }
}
