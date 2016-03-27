<?php

namespace App\Http\Controllers\Usuario;


use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PerfilController extends Controller
{
	public function show($user_name)
	{
		$user = User::where('user_name', '=', $user_name)->first();

		if (!empty($user)) 
		{
			return view('usuario.perfil')->with('user', $user);
		}
		else
		{
			return view('errors.404');
		}
	}
}
