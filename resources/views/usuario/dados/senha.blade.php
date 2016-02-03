<div id="modalSenha" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<form action="{{ action('Usuario\DadosController@senha') }}" method="POST" class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Alterar Senha</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="inputSenha" class="col-sm-4 control-label">Senha atual</label>
						<div class="col-sm-6">
							<input type="password" name="senhaAtual" class="form-control" id="inputSenha" placeholder="Senha Antiga">
						</div>
					</div>
					<div class="form-group">
						<label for="inputNovaSenha" class="col-sm-4 control-label">Nova senha</label>
						<div class="col-sm-6">
							<input type="password" name="novaSenha" class="form-control" id="inputNovaSenha" placeholder="Senha Nova">
						</div>
					</div>
					<div class="form-group">
						<label for="inputVerificacao" class="col-sm-4 control-label">Verificar senha</label>
						<div class="col-sm-6">
							<input type="password" name="verificacaoSenha" class="form-control" id="inputVerificacao" placeholder="Verificar senha">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Salvar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</div>

		</form>

	</div>
</div>
