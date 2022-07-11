@for($i=0; $i < count($array);  $i++)
<p>o valor randomico no index [{{$i}}] é :{{$array[$i]}}</p>
@endfor
<p>o resultado da soma de todos os valores do array é :{{$result}}</P>
<a href="/">voltar para home<a>