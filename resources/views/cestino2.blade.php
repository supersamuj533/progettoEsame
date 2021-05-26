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
<div  TARGET="Cestino">
@foreach ($twitte as $twittes)

<div class="b">
<div class="par">
<div> @ {{ $twittes->titolo }}</div> <div class="parData">data:{{$twittes->data  }}</div>
<div >{{$twittes->text  }}</div>
</div>
<div class="imm2"><img src="immagine/{{ $twittes->imm}}" alt="Mia Immagine" width ="100%" height="100%" ></div>
</div>
<br><br>
@endforeach
</div>
</body>
</html>