
@extends('layouts.defaultExterna')
@section('head')
<title>Avalie Seu Médico - Página Inicial</title>
@endsection

@section('navbar')

<li class="hidden">
	<a href="#page-top"></a>
</li>
<li class="page-scroll">
	<a href="#lista">Lista de Médicos</a>
</li>
<li class="page-scroll">
	<a href="#procure">Procure</a>
</li>
<li class="page-scroll">
	<a href="#contact">Contato</a>
</li>

<li class="page-scroll">
	<a href="#about">Sobre</a>
</li>
@endsection

@section('body')
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-responsive" src="img/profile.png" alt="">
				<div class="intro-text">
					<span class="name">Avalie Seu Médico</span>
					<hr class="star-light">
					<span class="skills">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eveniet aliquid dolore perferendis accusantium quo hic provident culpa deleniti quaerat, possimus, laboriosam, praesentium blanditiis unde libero aperiam sapiente! Sapiente, laboriosam.</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Portfolio Grid Section -->
<section id="lista">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Lista de médicos</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 portfolio-item" align="center">
				<a href="{{ action('ClinicaController@index') }}">
					<div class="caption">
						<div class="caption-content">
							<h3>HOSPITAL <i class="fa fa-search-plus fa-2x"></i></h3>
						</div>
					</div>
					<img src="img/portfolio/hospital.png" height="256" width="256" class="img-responsive">
				</a>
			</div>
			<div class="col-sm-4 portfolio-item" align="center">
				<a href="{{ action('EspecialidadeController@index') }}">
					<div class="caption">
						<div class="caption-content">
							<h3>ESPECIALIDADE <i class="fa fa-search-plus fa-2x"></i></h3>
						</div>
					</div>
					<img src="img/portfolio/especialidade.png" height="256" width="256" class="img-responsive" alt="">
				</a>
			</div>
			<div class="col-sm-4 portfolio-item" align="center">
				<a href="{{ action('MedicoController@index') }}">
					<div class="caption">
						<div class="caption-content">
							<h3>TODOS MÉDICOS <i class="fa fa-search-plus fa-2x"></i></h3>
						</div>
					</div>
					<img src="img/portfolio/medicina.png" height="256" width="256" class="img-responsive" alt="">
				</a>
			</div>
		</div>
	</div>
</section>

<!-- About Section -->
<section class="success" id="procure">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Médico, clínica ou especialidade</h2>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form method="get" action="{{ action('HomeController@busca') }}" class="input-group paddingBusca">
					<input type="text" name="nome" class="form-control">
					<span class="input-group-btn">
						<input type="submit" class="btn btn-default" value="Procurar" type="button">
					</span>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Contato</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ducimus quis incidunt eaque similique neque error quos, sunt et aspernatur, itaque dolore nisi. Obcaecati repellat nisi nobis, libero impedit fuga.</p>
			</div>
		</div>
	</div>
</section>

<!-- About Section -->
<section class="success" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Sobre</h2>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus enim unde cumque deserunt fugit et repudiandae quas error, hic, tempora maxime quo rem, maiores mollitia ratione vitae rerum temporibus facere!</p>
			</div>
		</div>
	</div>
</section>

@endsection