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
@foreach ($mipiace as $mipiaces)
<div class="imm"><img src="immagine/{{ $twittes->imm}}" alt="Mia Immagine" width ="100%" height="100%" ></div>
<div >@:{{ $twittes->titolo }}</div>
<div >{{$twittes->text  }}</div>
<div >data:{{$twittes->data  }}</div>
@if($twittes->id==$mipiaces->twitte)

<div class="text1">
<form action="/cuore5" method="get">
<input type="radio" name="idMiPiace" class="idMiPiace" value="{{$twittes->id2}}">togli like
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
</form>
</div>

<div class="text2">
<form action="/cestino2" method="get">
<input type="radio" name="idTwitte" class="idTwitte2" value="{{$twittes->id}}">elimina  </div>
<button  class="cestino" > <img src="https://image.freepik.com/icone-gratis/cestino-contorno-con-coperchio_318-39801.jpg" class="logo2"> </button>
</form></div>
@else
<div class="text1">
<form action="/cuore3" method="get">
<input type="radio" name="idTwitte" class="idTwitte" value="{{$twittes->id}}">metti like 
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
</form></div>


<div class="text2">
<form action="/cestino2" method="get">
<input type="radio" name="idTwitte" class="idTwitte2" value="{{$twittes->id}}">elimina</div>
<button  class="cestino" > <img src="https://image.freepik.com/icone-gratis/cestino-contorno-con-coperchio_318-39801.jpg" class="logo2"> </button>
</form></div>

@endif

@endforeach

</td></tr>
</tbody>
@endforeach



</div>
</body>
</html>







