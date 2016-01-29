<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/Busca', 'HomeController@busca');
Route::get('/Contato', 'HomeController@contato');
Route::get('/Sobre', 'HomeController@sobre');

//Medicos
Route::get('/Medicos', 'MedicoController@index');
Route::get('/Medicos/{id}', 'MedicoController@show');

//Especialidades
Route::get('/Especialidades', 'EspecialidadeController@index');
Route::get('/Especialidades/{id}', 'EspecialidadeController@show');

//Clinicas
Route::get('/Clinicas', 'ClinicaController@index');
Route::get('/Clinicas/{id}', 'ClinicaController@show');


//Administrativo Página Inicial
Route::get('/Administrativo', 'AdministradorController@index');

//Administrativo Médico
Route::get('/Administrativo/Medico', 'Administrativo\MedicoController@index');
Route::post('Administrativo/Medico', 'Administrativo\MedicoController@store');
Route::delete('Administrativo/Medico/{id}', 'Administrativo\MedicoController@destroy');

//Administrativo Clinica
Route::get('/Administrativo/Clinica', 'Administrativo\ClinicaController@index');
Route::post('Administrativo/Clinica', 'Administrativo\ClinicaController@store');
Route::delete('Administrativo/Clinica/{id}', 'Administrativo\ClinicaController@destroy');
//Adminitrativo Especialidade
Route::post('Administrativo/Especialidade', 'Administrativo\EspecialidadeController@store');
Route::get('/Administrativo/Especialidade', 'Administrativo\EspecialidadeController@index');
Route::delete('Administrativo/Especialidade/{id}', 'Administrativo\EspecialidadeController@destroy');

//Administrativo Avaliacões
Route::get('/Administrativo/Avaliacoes', 'Administrativo\AvaliacaoController@index');
Route::post('Administrativo/Avaliacoes', 'Administrativo\AvaliacaoController@store');
Route::delete('Administrativo/Avaliacoes/{id}', 'Administrativo\AvaliacaoController@destroy');
Route::get('Administrativo/Avaliacoes/{id}', 'Administrativo\AvaliacaoController@show');

//Avaliação
Route::get('Avaliar/{id}', 'AvaliacaoController@create');
Route::post('Avaliar', 'AvaliacaoController@store');

//Login
Route::get('Login', 'Auth\AuthController@getLogin');
Route::post('Login', 'Auth\AuthController@postLogin');

//Registro
Route::get('Registro', 'Auth\AuthController@getRegister');
Route::post('Registro', 'Auth\AuthController@postRegister');

//Logout
Route::get('Logout', 'Auth\AuthController@getLogout');

Route::get('Usuario/Avaliacoes', 'UsuarioController@avaliacoes');