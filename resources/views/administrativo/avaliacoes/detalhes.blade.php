@extends('layouts.admin')

@section('head')
<title>Área Administrativa - Avaliações</title>
@endsection

@section('content')
<div class="col-sm-6 col-sm-offset-3">
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
	</div>
</div>
<div class="col-sm-2 col-sm-offset-5">	
		<a href="{{ action('Administrativo\AvaliacaoController@index') }}" class="btn btn-danger col-sm-12"><i class="fa fa-backward"></i>
 Voltar</a>
</div>
@endsection