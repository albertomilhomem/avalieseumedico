@if (count($especialidades) > 0)

<h2 class="text-center">Especialidades</h2>

<table class="table">
	<thead>
		<tr>
			<th class="col-sm-5">Nome</th>
			<th class="col-sm-5 text-center">Médicos</th>
			<th class="col-sm-2 text-center"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($especialidades as $especialidade)
		<tr>							
			<td>{{$especialidade->nome}}</td>
			<td class="text-center">{{ count($especialidade->medicos) }}</td>
			<td class="text-center"><a href="{{ action('EspecialidadeController@show', $especialidade->id) }}"><span class="glyphicon glyphicon-search"></span></a></td>

		</tr>
		@endforeach
	</tbody>
</table>
@endif