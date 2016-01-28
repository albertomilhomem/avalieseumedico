@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Médicos</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">
		@include('clinicas.lista')
	</div>
</div>

@endsection