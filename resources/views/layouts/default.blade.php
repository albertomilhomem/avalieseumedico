@extends('layouts.defaultExterna')

@section('body')
<div class="padding">
	@yield('content')
</div>
@endsection


@section('navbar')
<li class="hidden">
	<a href=""></a>
</li>
<li class="page-scroll">
	<a href="{{ action('MedicoController@index') }}">Médicos</a>
</li>
<li class="page-scroll">
	<a href="{{ action('ClinicaController@index') }}">Clínicas</a>
</li>
<li class="page-scroll">
	<a href="{{ action('EspecialidadeController@index') }}">Especialidades</a>
</li>
@endsection
