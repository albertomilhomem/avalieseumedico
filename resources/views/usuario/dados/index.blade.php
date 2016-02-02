@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Minhas Avaliacoes</title>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-offset-5 col-sm-2">			
			@if(Auth::user()->imagem == true)
			<img src="/images/{{ Auth::user()->local }}" height="150" width="150" class="img-circle">
			@else
			<img src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" height="150" width="150" class="img-circle">
			@endif
		</div>
	</div>
	<br>
	<div class="row">		
		<div class="col-sm-offset-5 col-sm-2">
			<a href="{{ action('Usuario\DadosController@imagem') }}" class="btn btn-info col-sm-12">Alterar Foto</a>
		</div>
	</div>
</div>
@endsection