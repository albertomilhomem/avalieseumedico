@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Resultado da Busca</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">	
		@if((count($medicos) > 0) || (count($clinicas) > 0) || (count($especialidades) > 0))			
		@include('medicos.lista')
		@include('clinicas.lista')
		@include('especialidades.lista')
		@else

		<div class="alert alert-danger">
			Infelizmente, não foi localizado nenhum MÉDICO, CLÍNICA ou ESPECIALIDADE com o nome: <b>{{ strtoupper($nome) }} </b>
		</div>
		<div class="row">
		<h2 class="text-center padding">Tente novamente :)</h2>
		</div>
		@include('home.mecanismo')
		@endif
	</div>
</div>

@endsection