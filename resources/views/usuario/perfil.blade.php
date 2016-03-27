@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - {{ $user->name }}</title>

<link rel="stylesheet" href="/css/fileinput.css">
<script src="/js/cidades-estados-utf8.js"></script>
@endsection

@section('content')
@include('common.errors')
<div class="col-sm-6 col-sm-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $user->name }}</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3 col-lg-3 " align="center"> 
					@if($user->avatar == true)
					<img alt="User Pic" src="/images/{{ $user->avatar_name }}" class="img-circle img-responsive">
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
								<td>E-mail:</td>
								<td>
									<a href="mailto:{{$user->email}}">{{$user->email}}</a>
								</td>
							</tr>
							<tr>
								<td>Data de Nascimento</td>
								<td>
									@if(!Empty($user->dataNascimento))
									{{ date('d/m/Y', strtotime($user->dataNascimento)) }}
									@else
									Não informado
									@endif
								</td>
							</tr>

							<tr>
								<tr>
									<td>Gênero</td>
									<td>											
										@if(!Empty($user->genero))
										@if($user->genero == 1)
										Masculino
										@else
										Feminino
										@endif
										@else
										Não informado
										@endif
									</td>
								</tr>
								<tr>
									<td>Estado</td>
									<td>
										@if(!Empty($user->estado))
										{{ $user->estado }}
										@else
										Não informado
										@endif
									</td>
								</tr>
								<tr>
									<td>Cidade</td>
									<td>
										@if(!Empty($user->cidade))
										{{ $user->cidade }}
										@else
										Não informado
										@endif
									</td>
								</tr>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>	
</div>


<div class="col-sm-6 col-sm-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Avaliações <span class="badge text-left">{{ count($user->avaliacoes)}}</span></h3>
		</div>
		<div class="panel-body">
			@if(count($user->avaliacoes) > 0)
			@foreach($user->avaliacoes as $avaliacao)
			<div class="media">					
				<div class="media-body">
					<h4 class="media-heading">					
						{{ $avaliacao->medico->nome }} - {{ date('d/m/Y', strtotime($avaliacao->created_at)) }}
					</h4>
					<div class="media-body">
						<blockquote>
							<p>@include('common.estrelas')</p>
							<p>{{ $avaliacao->comentario }}</p>
						</blockquote>
					</div>
				</div>
			</div>
			@endforeach
			@else
			Esse usuário não fez nenhuma avaliação até o momento
			@endif
		</div>		
	</div>
</div>


@endsection