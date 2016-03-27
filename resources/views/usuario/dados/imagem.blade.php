<div id="modalImagem" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<form method="post" action="{{ action('Usuario\DadosController@upload') }}" id="upload" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Alterar Foto</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<label class="control-label">Selecionar foto</label>
					<input id="input-1a" type="file" class="file" name="file" data-show-preview="false">
				</div>
				<div class="modal-footer">					
					<input type="submit" class="btn btn-success" text="Enviar">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</form>
	</div>
</div>