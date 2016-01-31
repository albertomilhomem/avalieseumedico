@if($avaliacao->nota == 1)
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
@elseif($avaliacao->nota == 2)
<option value="1">1</option>
<option value="2" selected>2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
@elseif($avaliacao->nota == 3)
<option value="1">1</option>
<option value="2">2</option>
<option value="3" selected>3</option>
<option value="4">4</option>
<option value="5">5</option>
@elseif($avaliacao->nota == 4)
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4" selected>4</option>
<option value="5">5</option>
@elseif($avaliacao->nota == 5)
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5" selected>5</option>                                   
@endif
