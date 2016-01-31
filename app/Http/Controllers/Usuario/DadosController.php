<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;

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
        return view('usuario.avaliacoes');
    }

    public function alterar()
    {
        
    }
}
