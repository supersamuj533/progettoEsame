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


@foreach ($twitte as $twittes)
@php
$c=1;
@endphp
@php
$d=0;
@endphp
<div class="b">
<div class="par">

<div>@ {{ $twittes->titolo }}</div> <div class="parData">data:{{$twittes->data  }}</div>
<div >{{$twittes->text  }}</div>
</div>
<div class="imm"><img src="immagine/{{ $twittes->imm}}" alt="Mia Immagine" width ="100%" height="100%" ></div>

@foreach ($mipiace as $mipiaces)
@if($twittes->id==$mipiaces->twitte )
<form action="/cuore6" method="get">
<div class="accetto2">
<button  class="cuore"  name="idMiPiace" value="{{$twittes->id}}"><span style="font-size:250%;color:red;">&hearts;</span></button>
</div>
</form>
@foreach($mipiaceTot as $mipiaceTots)
@if($twittes->id==$mipiaceTots->twitte )
<p class="contaCuori2">&emsp;&emsp; <b>{{$mipiaceTots->ContaCuore}}</b></p>
</div>

@endif
@endforeach

@php
$c=0;
@endphp
@endif
@endforeach
@if($c==1)
@php
$c=0;
@endphp
<form action="/cuore2" method="get">
<div class="accetto2">
<button  class="cuore" name="idTwitte" value="{{$twittes->id}}"><img src="https://th.bing.com/th/id/OIP.bHElRcIsQNeWYfU0s6L5GQHaFN?w=224&h=180&c=7&o=5&dpr=1.25&pid=1.7" class="cu"></button>
</div>
</form>
@foreach($mipiaceTot as $mipiaceTots)
@if($twittes->id==$mipiaceTots->twitte )
@php
$d=$mipiaceTots->ContaCuore;
@endphp
@endif
@endforeach
<p class="contaCuori2">&emsp;&emsp; <b>{{$d}}</b></p>
</div>




</div>
@endif
<br><br>
@endforeach


</div>
</body>
</html>







