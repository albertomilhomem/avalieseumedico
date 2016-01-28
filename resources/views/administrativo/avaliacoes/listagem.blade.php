@extends('layouts.admin')

@section('head')
<title>Área Administrativa - Avaliações</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-12">

		@if (count($avaliacoes) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				Avaliações
			</div>

			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th class="col-sm-4">Usuario</th>
							<th class="col-sm-3">Médico</th>
							<th class="col-sm-2">Nota</th>
							<th class="col-sm-1">Data</th>
							<th class="col-sm-1"></th>
							<th class="col=sm-1"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($avaliacoes as $avaliacao)
						<tr>

							<td>{{$avaliacao->user->name}}</td>
							<td>{{$avaliacao->medico->nome}}</td>
							<td>
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
							</td>
							<td>{{ date('d/m/Y', strtotime($avaliacao->created_at)) }}</td>
							<td>
								<a href="{{ action('Administrativo\AvaliacaoController@show', $avaliacao->id) }}" class="btn btn-xs btn-info">
									<i class="fa fa-comments"></i> Comentário
								</a>
							</td>
							<td>
								<form action="{{ action('Administrativo\AvaliacaoController@destroy', $avaliacao->id) }}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-xs btn-danger">
										<i class="fa fa-trash"></i> Deletar
									</button>
								</form>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif

	</div>
</div>
@endsection