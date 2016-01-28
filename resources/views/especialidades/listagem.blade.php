@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Especialidades</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">		
		@include('especialidades.lista')
	</div>
</div>

@endsection