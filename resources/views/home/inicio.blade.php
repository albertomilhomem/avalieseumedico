@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Página Inicial</title>
@endsection

@section('content')
<div class="container pgInicial">
	<div class="row">
		<h2 class="text-center padding">Procure pelo seu médico, clínica ou especialidade</h2>
	</div>
	@include('home.mecanismo')
</div>
@endsection