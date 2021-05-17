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
<div  TARGET="twitte">


@foreach ($twitte as $twittes)

@if($twittes->tipo==0)
<div >@:{{ $twittes->titolo }}</div>
<div >{{ $twittes->text }}</div>
<div >data:{{ $twittes->data }}</div>
<form action="/cuore" method="get">
<div class="accetto1">
<input type="radio" name="idTwitte" class="idTwitte" value="{{  $twittes->id}}">si </div>
<button  class="cuore" ><span style="font-size:250%;color:red;">&hearts;</span></button>
</form>
<form action="/cestino" method="get">
<button  class="cestino" > <img src="https://image.freepik.com/icone-gratis/cestino-contorno-con-coperchio_318-39801.jpg" class="imm"> </button>
@endif
@endforeach



</div>
</body>
</html>