@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Especialidade - {{ $especialidade->nome }}</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">

		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ $especialidade->nome }}</strong>
			</div>

			<div class="panel-body">
				{{ $especialidade->descricao }}

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
							<th class="col-sm-2">Clinica</th>
							<th class="col-sm-2"></th>
							<th class="col-sm-1 text-center">Detalhes</th>
						</tr>
					</thead>
					<tbody>
						@foreach($especialidade->medicos as $medico)
						<tr>
							<td>{{$medico->nome}}</td>
							<td>{{$medico->clinica->nome}}</td>

							<td class="text-center">
								@if(count($medico->avaliacoes) > 0)

								@if($medico->nota == '1')
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								@elseif($medico->nota == '2')
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								@elseif($medico->nota == '3')
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								@elseif($medico->nota == '4')
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								@elseif($medico->nota == '5')
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								@endif
								@else
								Nunca avaliado
								@endif
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