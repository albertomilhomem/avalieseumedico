@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Clinicas - {{ $clinica->nome }}</title>
@endsection

@section('content')
@include('common.errors')
<div class="col-sm-6 col-sm-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $clinica->nome }}</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3 col-lg-3 " align="center"> 
					@if($clinica->imagem == true)
					<img alt="User Pic" src="/images/{{ $clinica->local }}" class="img-circle img-responsive">
					@else
					<img alt="User Pic" src="
					http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" class="img-circle img-responsive">
					@endif

					<br>
				</div>
				<div class=" col-md-9 col-lg-9 "> 
					<table class="table table-user-information">
						<tbody>
							<tr>
								<td class="bold">Telefone:</td>
								<td>
									{{$clinica->telefone}}
								</td>
							</tr>
							<tr>
								<td class="bold">Rua:</td>
								<td>
									{{$clinica->rua}}
								</td>
							</tr>
							<tr>
								<td class="bold">Bairro:</td>
								<td>
									{{$clinica->bairro}}
								</td>
							</tr>
							<tr>
								<td class="bold">Número:</td>
								<td>
									{{$clinica->numero}}
								</td>
							</tr>
							<tr>
								<td class="bold">Médicos cadastrados:</td>
								<td>
									{{ count($clinica->medicos)}}
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">
		<h3 class="text-center">Médicos</h3>
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

@endsection