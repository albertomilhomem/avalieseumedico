@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Minhas Avaliacoes</title>
@endsection

@section('content')
<div class="col-sm-offset-3 col-sm-6">

	@if(count(Auth::user()->avaliacoes) > 0)
	@foreach(Auth::user()->avaliacoes as $avaliacao)

	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>{{ $avaliacao->medico->nome }}</strong>
			- {{ date('d/m/Y', strtotime($avaliacao->created_at)) }}
		</div>
		<div class="panel-body">				
			@include('medicos.avaliacao')
			<div class="col-sm-6 col-sm-offset-3">					
				<a href="{{ action('Usuario\AvaliacaoController@alterar', $avaliacao->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Alterar</a>
				<a href="{{ action('Usuario\AvaliacaoController@deletar', $avaliacao->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a>
			</div>
		</div>
	</div>

	@endforeach
	@else
	<div class="alert alert-info">Voce nao possui nenhuma avaliaçao! :(</div>
	@endif
</div>
@endsection