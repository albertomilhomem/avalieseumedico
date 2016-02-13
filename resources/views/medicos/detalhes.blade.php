@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Médico - {{ $medico->nome }}</title>
@endsection

@section('content')

@include('common.errors')
<div class="col-sm-offset-1 col-sm-10">
	@if(Auth::guest())
	<div class="alert alert-danger">
		Efetue login para avaliar esse médico!
	</div>
	@endif
</div>
<div class="col-sm-6 col-sm-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $medico->nome }}</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3 col-lg-3 " align="center"> 
					@if($medico->imagem == true)
					<img alt="User Pic" src="/images/{{ $medico->local }}" class="img-circle img-responsive">
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
								<td class="bold">Clínica:</td>
								<td>
									{{$medico->clinica->nome}}
								</td>
							</tr>
							<tr>
								<td class="bold">Especialidade:</td>
								<td>
									{{$medico->especialidade->nome}}
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>	
</div>


<div class="col-sm-4 col-sm-offset-4">
	<h3 class="text-center">Avaliações <span class="badge text-left">{{ count($medico->avaliacoes)}}</span></h3>
	@if(count($medico->avaliacoes) > 0)
	@foreach($medico->avaliacoes as $avaliacao)			
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="media">
				@include('medicos.avaliacao')
			</div>

			@if (!Auth::guest())
			@if (Auth::user()->id == $avaliacao->user->id)
			<div class="col-sm-6 col-sm-offset-3">					
				<a href="{{ action('Usuario\AvaliacaoController@alterar', $avaliacao->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Alterar</a>
				<a href="{{ action('Usuario\AvaliacaoController@deletar', $avaliacao->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a>
			</div>
			@endif
			@endif
		</div>
	</div>

	@endforeach
	@else
	<div class="well">Esse médico não possui avaliações.</div>
	@endif
</div>	

@endsection