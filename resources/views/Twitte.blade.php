<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body > 
<div  TARGET="zonacentrale">
<table >

@foreach ($twitte as $twittes)

<tbody>
<tr class="a"><td class="b">
<div class="imm"><img src="immagine/{{ $twittes->imm}}" alt="Mia Immagine" width ="100%" height="100%" ></div>
<div >@:{{ $twittes->titolo }}</div>
<div >{{$twittes->text  }}</div>
<div >data:{{$twittes->data  }}</div>
<div class='nomeUtente'>Utente: {{ $twittes->nomeUtente}}</div>
@foreach ($utente as $utentes)

@if ($twittes->ut==$utentes->id)
<form action="/cuore4" method="get">
<div class="accetto2">
<input type="radio" name="idMiPiace" class="idMiPiace" value="{{$twittes->id2}}">togli like
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
<p>{{$twittes->contaCuori}}</p>
</div></form>
@else


<form action="/cuore" method="get">
<div class="accetto2">
<input type="radio" name="idTwitte" class="idTwitte" value="{{$twittes->id}}">metti like
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
<p>{{$twittes->contaCuori}}</p>
</div></form>
@endif
@endforeach





</td></tr>
</tbody>


@endforeach

</table>
</div>
</body>
</html>