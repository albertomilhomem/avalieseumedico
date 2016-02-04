@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Meus Dados</title>

<link rel="stylesheet" href="/css/fileinput.css">
<script src="/js/cidades-estados-utf8.js"></script>
@endsection

@section('content')
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


		@include('common.errors')

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{ Auth::user()->name }}</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 col-lg-3 " align="center"> 
						@if(Auth::user()->imagem == true)
						<img alt="User Pic" src="/images/{{ Auth::user()->local }}" class="img-circle img-responsive">
						@else
						<img alt="User Pic" src="
						http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" class="img-circle img-responsive">
						@endif

						<br>

						<a href="#" class="btn btn-info col-sm-12" type="button" data-toggle="modal" data-target="#modalImagem">Alterar Foto</a>
					</div>
					<div class=" col-md-9 col-lg-9 "> 
						<table class="table table-user-information">
							<tbody>
								<tr>
									<td>E-mail:</td>
									<td>
										<a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a>
									</td>
								</tr>
								<tr>
									<td>Data de Nascimento</td>
									<td>
										@if(!Empty(Auth::user()->dataNascimento))
										{{ date('d/m/Y', strtotime(Auth::user()->dataNascimento)) }}
										@else
										Não informado
										@endif
									</td>
								</tr>

								<tr>
									<tr>
										<td>Gênero</td>
										<td>											
											@if(!Empty(Auth::user()->genero))
											@if(Auth::user()->genero == 1)
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
											@if(!Empty(Auth::user()->estado))
											{{ Auth::user()->estado }}
											@else
											Não informado
											@endif
										</td>
									</tr>
									<tr>
										<td>Cidade</td>
										<td>
											@if(!Empty(Auth::user()->cidade))
											{{ Auth::user()->cidade }}
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
			<div class="panel-footer" align="center">
				<a class="btn btn-success" type="button" data-toggle="modal" data-target="#modalAlterar"><i class="glyphicon glyphicon-edit" ></i> Editar</a>
				<a class="btn btn-warning" type="button" data-toggle="modal" data-target="#modalSenha"><i class="glyphicon glyphicon-remove"></i> Alterar senha</a>
			</div>
		</div>
	</div>

	@include('usuario.dados.senha')
	@include('usuario.dados.imagem')
	@include('usuario.dados.alterar')

</div>
@endsection