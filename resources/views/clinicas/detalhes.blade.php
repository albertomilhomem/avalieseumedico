@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Clinicas - {{ $clinica->nome }}</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">

		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ $clinica->nome }}</strong>
			</div>

			<div class="panel-body">
				<strong>Telefone:</strong> <p>{{$clinica->telefone}}</p>
				<strong>Rua:</strong> <p>{{ $clinica->rua }}</p>
				<strong>Bairro:</strong> <p>{{ $clinica->bairro }}</p>
				<strong>Numero:</strong> <p> {{ $clinica->numero }}</p>

			</div>
		</div>

		<!-- Current Tasks -->
		<div class="panel panel-default">
			<div class="panel-heading">
				Médicos
			</div>

			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th class="col-sm-4">Nome</th>
							<th class="col-sm-2">Especialidade</th>
							<th class="col-sm-2"></th>
							<th class="col-sm-1 text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($clinica->medicos as $medico)
						<tr>

							<td>{{$medico->nome}}</td>
							<td>{{$medico->especialidade->nome}}</td>
							<td class="text-center">
							@include('medicos.nota')
							</td>
							<td class="text-center"><a href="{{ action('MedicoController@show', $medico->id) }}"><span class="glyphicon glyphicon-search"></span></a></td>

						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection