@if (count($clinicas) > 0)

		<h2 class="text-center">Clínicas</h2>

		<table class="table">
			<thead>
				<tr>
					<th class="col-sm-4">Nome</th>
					<th class="col-sm-4">Rua</th>
					<th class="col-sm-2 text-center">Médicos</th>
					<th class="col-sm-2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($clinicas as $clinica)
				<tr>
					
					<td>{{$clinica->nome}}</td>
					<td>{{$clinica->rua}}</td>
					<td class="text-center">{{ count($clinica->medicos) }}</td>
					<td class="text-center"><a href="{{ action('ClinicaController@show', $clinica->id)}}"><span class="glyphicon glyphicon-search"></span></a></td>
					
				</tr>
				@endforeach
			</tbody>
		</table>

@endif