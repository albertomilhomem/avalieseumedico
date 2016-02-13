<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
	<link href="/css/bootstrap.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/css/freelancer.css" rel="stylesheet">	
	<link rel="stylesheet" href="/css/style.css">

	<!-- Custom Fonts -->
	<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	@yield('head')
</head>

<body id="page-top" class="index">

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Avalie Seu Médico</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					@yield('navbar')
					@if (Auth::guest())
					<li><a href="{{ action('Auth\AuthController@getLogin') }}"><i class="fa fa-btn fa-sign-in"></i> Efetuar Login</a></li>
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">

							@if(Auth::user()->imagem == true)
							<img src="/images/{{ Auth::user()->local }}" height="30" width="30" class="img-circle">
							@else
							<img src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" height="30" width="30" class="img-circle">
							@endif
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a>
									{{ (Auth::user()->name) }}
								</a>
							</li>

							<li role="separator" class="divider"></li>

							@if(Auth::user()->nivel == 1)
							<li>
								<a href="{{ action('AdministradorController@index') }}">
									<i class="fa fa-btn fa-lock"></i> Área Administrativa
								</a>
							</li>

							<li role="separator" class="divider"></li>
							@endif
							<li>
								<a href="{{ action('Usuario\DadosController@index') }}">
									<i class="fa fa-btn fa-user"></i> Meus Dados
								</a>
							</li>
							<li>
								<a href="{{ action('Usuario\AvaliacaoController@index') }}">
									<i class="fa fa-btn fa-comments"></i> Minhas Avaliações
								</a>
							</li>
							<li>
								<a href="{{ action('Auth\AuthController@getLogout') }}">
									<i class="fa fa-btn fa-sign-out"></i> Sair
								</a>
							</li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('body')

	<div class="footer page-row">
		<footer class="text-center">
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-4 col-md-offset-4">
							<ul class="list-inline">
								<li>
									<a href="http://www.facebook.com/AvalieMedico" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
								</li>
								<li>
									<a href="http://www.twitter.com/AvalieMedico" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
								</li>
								<li>
									<a href="http://www.instagram.com/AvalieSeuMedico" target="_blank"   class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-lg-12">
							<p>Feito com <i class="fa fa-heart"></i> por <a href="http://www.twitter.com/porralberto" target="_blank">@porralberto</a></p>
						</div>

					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll visible-xs visible-sm">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	<!-- jQuery -->
	<script src="/js/jquery-2.1.4.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="/js/bootstrap.js"></script>

	<!-- Plugin JavaScript -->
	<script src="/js/classie.js"></script>
	<script src="/js/cbpAnimatedHeader.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="/js/freelancer.js"></script>

</body>

</html>