<div id="modalAlterar" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<form action="{{ action('Usuario\DadosController@alterar') }}" method="POST" class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Alterar Dados</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="inputNome" class="col-sm-4 control-label">Nome</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control" id="inputNome" placeholder="Nome" value="{{ Auth::user()->name }}">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail" class="col-sm-4 control-label">E-mail</label>
						<div class="col-sm-6">
							<input type="text" name="email" class="form-control" id="inputEmail" placeholder="E-mail" value="{{ Auth::user()->email }}">
						</div>
					</div>

					<div class="form-group">
						<label for="user_name" class="col-sm-4 control-label">Nome de usuário</label>

						<div class="col-sm-6">
							<input type="text" name="user_name" class="form-control" value="{{ Auth::user()->user_name }}">
						</div>
					</div>

					<div class="form-group">
						<label for="inputDataNascimento" class="col-sm-4 control-label">Data de Nascimento</label>
						<div class="col-sm-6">
							<input type="date" name="dataNascimento" class="form-control" id="inputDataNascimento" placeholder="Data de Nascimento" value="{{ Auth::user()->dataNascimento }}">
						</div>
					</div>

					<div class="form-group">
						<label for="inputGenero" class="col-sm-4 control-label">Gênero</label>
						<div class="col-sm-6">
							<select name="genero" value="{{ Auth::user()->genero }}" id="inputGenero" class="form-control">
								@if(!Empty(Auth::user()->genero))
								@if(Auth::user()->genero == 0)
								<option>Selecione um gênero</option>
								<option value="0" selected>Feminino</option>
								<option value="1">Masculino</option>
								@else
								<option>Selecione um gênero</option>
								<option value="0">Feminino</option>
								<option value="1" selected>Masculino</option>
								@endif
								@else
								<option selected>Selecione um gênero</option>
								<option value="0">Feminino</option>
								<option value="1">Masculino</option>
								@endif
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEstado" class="col-sm-4 control-label">Estado</label>
						<div class="col-sm-6">
							<select name="estado" value="{{ Auth::user()->estado }}"  id="inputEstado" class="form-control"></select>
						</div>
					</div class="form-group">
					<div class="form-group">
						<label for="inputCidade" class="col-sm-4 control-label">Cidade</label>
						<div class="col-sm-6">
							<select name="cidade" value="{{ Auth::user()->cidade }}" id="inputCidade" class="form-control"></select>
						</div>			
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Salvar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script language="JavaScript" type="text/javascript" charset="utf-8">
	new dgCidadesEstados({
		cidade: document.getElementById('inputCidade'),
		estado: document.getElementById('inputEstado')
	})
</script>