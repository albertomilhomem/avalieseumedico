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

    public function alterar(Request $request)
    {
        $usuario = Auth::user();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->dataNascimento = $request->dataNascimento;
        $usuario->user_name = $request->user_name;
        if (!Empty($request->genero)) 
        {
            $usuario->genero = $request->genero;
        }        
        if (!Empty($request->estado))
        {            
            $usuario->estado = $request->estado;
        }
        if (!Empty($request->cidade)) 
        {
            $usuario->cidade = $request->cidade;
        }
        $usuario->save();

        return redirect()->back()->with('success', 'Dados alterados com sucesso!');

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
            $usuario->avatar_name = 'img_' . md5($usuario->id . time() . $usuario->name . $file->getClientOriginalName());
            if (!Empty($file->getClientOriginalExtension())) 
            {
                $usuario->avatar_name = $usuario->avatar_name . '.' . $file->getClientOriginalExtension();
            }
            $file->move(storage_path() . '/images/', $usuario->avatar_name);
            $usuario->avatar = 1;
            $usuario->save();

            return redirect()->action('Usuario\DadosController@index');
        }
        else
        {
            return redirect()->back();            
        }
    }
}
