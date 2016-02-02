<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('usuario.dados.index');
    }

    public function imagem()
    {
        return view('usuario.dados.imagem');        
    }

    public function upload(Request $request)
    {
        $usuario = Auth::user();
        if(Input::hasFile('file')){
            $file = Input::file('file');
            $usuario->local = 'img_' . md5($usuario->id . time() . $usuario->name . $file->getClientOriginalName()) . "." . $file->getClientOriginalExtension();
            $file->move('images', $usuario->local);
            $usuario->imagem = 1;
            $usuario->save();

            return redirect()->action('Usuario\DadosController@index');
        }
        else
        {
            return redirect()->back();            
        }
        
    }
}
