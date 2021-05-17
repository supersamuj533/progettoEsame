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

<div >@:{{ $twittes->titolo }}</div>
<div >{{$twittes->text  }}</div>
<div >data:{{$twittes->data  }}</div>
<div class='nomeUtente'>Utente: {{ $twittes->nomeUtente}}</div>
@foreach ($utente as $utentes)

@if ($twittes->ut==$utentes->id)
<div class="text"><p ></p></div>
<form action="/cuore4" method="get">
<div class="accetto1">
<input type="radio" name="idMiPiace" class="idMiPiace" value="{{$twittes->id2}}">togli like</div>
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
</form>
@else

<div class="text"><p ></p></div>
<form action="/cuore" method="get">
<div class="accetto1">
<input type="radio" name="idTwitte" class="idTwitte" value="{{$twittes->id}}">metti like</div>
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
</form>
@endif
@endforeach





</td></tr>
</tbody>


@endforeach

</table>
</div>
</body>
</html>