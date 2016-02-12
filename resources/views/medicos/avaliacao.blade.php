<div class="media-left media-middle">
	<a href="/{{  $avaliacao->user->showName }}">
		@if($avaliacao->user->imagem == true)
		<img src="/images/{{ $avaliacao->user->local }}" height="60" width="60" class="img-circle">
		@else
		<img src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" height="60" width="60" class="img-circle">
		@endif
	</a>
</div>
<div class="media-body">
	<blockquote>
		<p>@include('common.estrelas')</p>
		<p>{{ $avaliacao->comentario }}</p>
		<footer>{{ $avaliacao->user->name }}</footer>
	</blockquote>
</div>