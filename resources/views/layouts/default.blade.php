<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/css/style.css">	

	<script src="/js/jquery-2.1.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="/css/bootstrap-social.css" type="text/css">

	@yield('head')
</head>
<body>
	<div>
		<div>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
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
						<li><a href="{{ action('MedicoController@index') }}">Médicos</a></li>
						<li><a href="{{ action('ClinicaController@index') }}">Clinicas</a></li>
						<li><a href="{{ action('EspecialidadeController@index') }}">Especialidades</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{ action('HomeController@contato') }}">Contato</a></li>					
								<li><a href="{{ action('HomeController@sobre') }}">Sobre</a></li>						
							</ul>
						</li>
					</ul>


					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							&nbsp;
						</ul>
						<ul class="nav navbar-nav navbar-right">
							@if (Auth::guest())
							<li><a href="{{ action('Auth\AuthController@getRegister') }}"><i class="fa fa-btn fa-heart"></i> Registre-se</a></li>
							<li><a href="{{ action('Auth\AuthController@getLogin') }}"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>
							@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-btn fa-user"></i>
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a>
												{{ (Auth::user()->name) }}</a>
											</li>

											@if(Auth::user()->nivel == 1)
											<li><a href="{{ action('AdministradorController@index') }}">
												<i class="fa fa-btn fa-lock"></i> Área Administrativa</a></li>
												@endif
												<li><a href="{{ action('Auth\AuthController@getLogout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
											</ul>
										</li>
										@endif
									</ul>
								</div>
							</div>
						</nav>
					</div>

					<div id="content">
						@yield('content')
					</div>
				</div>
				@yield('footer')
			</body>

			
			</html>