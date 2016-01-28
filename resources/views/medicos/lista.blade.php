
@if (count($medicos) > 0)
<div class="panel panel-default">
	<div class="panel-heading">
		Médicos
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th class="col-sm-4">Nome</th>
					<th class="col-sm-4">Clinica</th>
					<th class="col-sm-1">Especialidade</th>
					<th class="col-sm-2"></th>
					<th class="col-sm-1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($medicos as $medico)
				<tr>
					<td>{{$medico->nome}}</td>
					<td>{{$medico->clinica->nome}}</td>
					<td>{{$medico->especialidade->nome}}</td>
					<td class="text-center">
						@include('medicos.nota')
					</td>
					<td class="text-center"><a href="{{ action('MedicoController@show', $medico->id) }}"><span class="glyphicon glyphicon-search"></span></a></td>

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endif