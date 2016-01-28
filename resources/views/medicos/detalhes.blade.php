@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Médico - {{ $medico->nome }}</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-1 col-sm-10">
		@if(Auth::guest())
		<div class="alert alert-danger">Efetue login para avaliar esse médico!</div>
		@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ $medico->nome }}</strong>
			</div>
			<div class="panel-body">
				<p><strong>Especialidade:</strong> {{ $medico->especialidade->nome }} </p>
				<p><strong>Clinica:</strong> {{ $medico->clinica->nome }}</p>
				<p><strong>Nota:</strong> 
					@include('medicos.nota')
					<p><strong>Avaliações:</strong> {{ count($medico->avaliacoes) }}</p>
				</div>
			</div>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="form-group text-center">
				@if(!Auth::guest())		
				<a href="{{ action('AvaliacaoController@create', $medico->id) }}" class="btn btn btn-info"><i class="fa fa-comments"></i> Avaliar</a>
				@endif
			</div>		
		</div>

		<div class="col-sm-offset-3 col-sm-6">
			@if(count($medico->avaliacoes) > 0)
			@foreach($medico->avaliacoes as $avaliacao)			
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>{{ $avaliacao->user->name }}</strong>
					- {{ date('d/m/Y', strtotime($avaliacao->created_at)) }}</div>
					<div class="panel-body">
						<p><strong>Nota:</strong>
							@if($avaliacao->nota == '1')
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							@elseif($avaliacao->nota == '2')
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							@elseif($avaliacao->nota == '3')
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							@elseif($avaliacao->nota == '4')
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
							@elseif($avaliacao->nota == '5')
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							@endif
						</p>
						<p><strong>Comentário:</strong> {{ $avaliacao->comentario }}</p>
					</div>
				</div>

				@endforeach
				@else
				<div class="well">Esse médico não possui avaliações.</div>
				@endif

			</div>
		</div>

		@endsection