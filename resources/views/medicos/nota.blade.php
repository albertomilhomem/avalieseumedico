@if(count($medico->avaliacoes) > 0)

@if($medico->nota == '1')
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
<span class="glyphicon glyphicon-star-empty"></span>
<span class="glyphicon glyphicon-star-empty"></span>
<span class="glyphicon glyphicon-star-empty"></span>
@elseif($medico->nota == '2')
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
<span class="glyphicon glyphicon-star-empty"></span>
<span class="glyphicon glyphicon-star-empty"></span>
@elseif($medico->nota == '3')
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
<span class="glyphicon glyphicon-star-empty"></span>
@elseif($medico->nota == '4')
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
@elseif($medico->nota == '5')
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
@endif
@else
Nunca avaliado
@endif