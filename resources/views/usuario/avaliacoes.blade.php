@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Minhas Avaliacoes</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-3 col-sm-6">

		@if(count(Auth::user()->avaliacoes) > 0)
		@foreach(Auth::user()->avaliacoes as $avaliacao)

		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ $avaliacao->user->name }}</strong>
				- {{ date('d/m/Y', strtotime($avaliacao->created_at)) }}
			</div>
			<div class="panel-body">
				<p>
					<strong>Nota:</strong>			
					@include('common.estrelas')
				</p>
				<p>
					<strong>Comentário:</strong> {{ $avaliacao->comentario }}
				</p>
			</div>
		</div>

		@endforeach
		@else
		<div class="well">Voce nao possui nenhuma avaliaçao.</div>
		@endif
		@endsection
	</div>
</div>