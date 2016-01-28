@extends('layouts.admin')
@section('head')
<title>Área Administrativa - Página Inicial</title>
@endsection

@section('content')
<div class="container">
	<fieldset>
		<legend>Painel</legend>
		
		<div class="col-lg-3 col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-user-md fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ count($medicos) }}</div>
							<div>Médicos</div>
						</div>
					</div>
				</div>
				<a href="{{ action('Administrativo\MedicoController@index') }}">
					<div class="panel-footer">
						<span class="pull-left">Visualizar</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-3 col-md-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-comments fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ count($avaliacoes) }}</div>
							<div>Avaliações</div>
						</div>
					</div>
				</div>
				<a href="{{ action('Administrativo\AvaliacaoController@index') }}">
					<div class="panel-footer">
						<span class="pull-left">Visualizar</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-3 col-md-3">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-hospital-o fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ count($clinicas) }}</div>
							<div>Clinicas</div>
						</div>
					</div>
				</div>
				<a href="{{ action('Administrativo\ClinicaController@index') }}">
					<div class="panel-footer">
						<span class="pull-left">Visualizar</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-3 col-md-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-stethoscope fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ count($especialidades) }}</div>
							<div>Especialidades</div>
						</div>
					</div>
				</div>
				<a href="{{ action('Administrativo\EspecialidadeController@index') }}">
					<div class="panel-footer">
						<span class="pull-left">Visualizar</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	</fieldset>
</div>
@endsection
