@extends('layouts.default')
@section('head')
<title>Avalie Seu Médico - Minhas Avaliacoes</title>

<script src="/js/fileinput.js"></script>
<script src="/js/fileinput_locale_pt-BR.js"></script>

<link rel="stylesheet" href="/css/fileinput.css">
@endsection

@section('content')
<div class="container">
	<div id="message"></div>
	<div class="col-sm-6 col-sm-offset-3">
		<form method="post" action="{{ action('Usuario\DadosController@upload') }}" id="upload" enctype="multipart/form-data">
			<input type="hidden" value="{{ csrf_token() }}" name="_token">
			<label class="control-label">Select File</label>
			<input id="input-1a" type="file" class="file" name="file" data-show-preview="false">
		</form>
	</div>
</div>
@endsection