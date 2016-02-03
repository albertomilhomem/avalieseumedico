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

    public function senha(Request $request)
    {
        $usuario = Auth::user();
        if (Hash::check($request->senhaAtual, $usuario->password))
        {
            if ($request->novaSenha == $request->verificacaoSenha) 
            {
                $usuario->password = bcrypt($request->novaSenha);
                $usuario->save();

                return redirect()->back()->with('success', 'Senha alterada com sucesso!');

            }
            else
            {
                $errors = "A confirmação de senha não confere";
            }
        }
        else
        {
            $errors = "A senha atual digitada não confere";
        }

        return redirect()->back()->withErrors(array('errors' => $errors));
    }

    public function upload(Request $request)
    {
        $usuario = Auth::user();
        if(Input::hasFile('file')){
            $file = Input::file('file');
            $usuario->local = 'img_' . md5($usuario->id . time() . $usuario->name . $file->getClientOriginalName());
            if (!Empty($file->getClientOriginalExtension())) 
            {
                $usuario->local = $usuario->local . '.' . $file->getClientOriginalExtension();
            }
            $file->move(storage_path() . '/images/', $usuario->local);
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
