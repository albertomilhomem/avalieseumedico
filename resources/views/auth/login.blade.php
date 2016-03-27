@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Área de Login</title>
@endsection

@section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="alert alert-info" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<p class="text-center">Não é registrado ainda? Registre-se <a href="{{ action('Auth\AuthController@getRegister') }}">aqui</a></p>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				Área de Login
			</div>

			<div class="panel-body">
				<!-- Display Validation Errors -->
				@include('common.errors')

				<!-- New Task Form -->
				<form action="{{ action('Auth\AuthController@postLogin') }}" method="POST" class="form-horizontal">
					{{ csrf_field() }}

					<!-- E-Mail Address -->
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">E-mail</label>

						<div class="col-sm-6">
							<input type="email" name="email" class="form-control" value="{{ old('email') }}">
						</div>
					</div>

					<!-- Password -->
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Senha</label>

						<div class="col-sm-6">
							<input type="password" name="password" class="form-control">
						</div>
					</div>

					<!-- Login Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-btn fa-sign-in"></i> Logar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
