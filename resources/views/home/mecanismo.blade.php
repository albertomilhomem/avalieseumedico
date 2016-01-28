<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form method="get" action="{{ action('HomeController@busca') }}" class="input-group">
			<input type="text" name="nome" class="form-control">
			<span class="input-group-btn">
				<input type="submit" class="btn btn-default" value="Procurar" type="button">
			</span>
		</form>
	</div>
</div>