@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Página Inicial</title>
@endsection

@section('content')
<div class="container pgInicial">
	<div class="row">
		<h2 class="text-center padding">Procure pelo seu médico, clínica ou especialidade</h2>
	</div>
	@include('home.mecanismo')
</div>
@endsection

@section('footer')
<footer class="page-row">
	<div class="footer">
		<div class="container">
			<div class="col-sm-4">
				Avalie Seu Médico é uma aplicação desenvolvida com o objetivo de auxiliar as pessoas na busca por médicos de confianças.

				<br />
				<br />
				<div class="text-center">							
					<a href="{{ action('HomeController@sobre') }}">Leia mais...</a>
				</div>
			</div>


			<div class="col-sm-4 text-center">
				<p>Todos os direitos reservados.</p>
			</div>


			<div class="col-sm-4">
				<a href="http://www.twitter.com/AvalieSeuMedico" target="_blank" class="btn btn-block btn-social btn-twitter">
					<span class="fa fa-twitter"></span> Nos siga no Twitter
				</a>
				<a class="btn btn-block btn-social btn-facebook" target="_blank" href="http://www.facebook.com/AvalieSeuMedico">
					<span class="fa fa-facebook"></span> Curta nossa página no Facebook
				</a>
			</div>
		</div>
	</div>
</footer>
@endsection
