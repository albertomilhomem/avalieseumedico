<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">

	<script src="/js/jquery-2.1.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	
	<style>
		body {
			margin-top: 25px;
		}

		.fa-btn {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
	</style>
	@yield('head')
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="/">Avalie Seu Médico</a>
				</div>

				<ul class="nav navbar-nav">				
					<li>
						<a href="{{ action('AdministradorController@index') }}">Informações</a>
					</li>

					<li>
						<a href="{{ action('Administrativo\AvaliacaoController@index') }}">Avaliações</a>
					</li>

					<li>
						<a href="{{ action('Administrativo\ClinicaController@index') }}">Clinicas</a>
					</li>

					<li>
						<a href="{{ action('Administrativo\EspecialidadeController@index') }}">Especialidades</a>
					</li>

					<li>
						<a href="{{ action('Administrativo\MedicoController@index') }}">Médicos</a>
					</li>
				</ul>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (!Auth::guest())
						<li class="navbar-text">
							<i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}
						</li>
						<li><a href="{{ action('Auth\AuthController@getLogout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						@endif
					</ul>
				</div>
			</div>

		</nav>

	</div>

	@yield('content')

</body>
</html>