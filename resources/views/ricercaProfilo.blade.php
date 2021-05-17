<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style7.css">
</head>
<body > 
<div  TARGET="ricercaProfilo">
<table >
<div class="risultato">
@foreach ($utente as $utentes)
<form action="/utenteRicercato"  method="get">
<button  class="botton8" >{{ $utentes->nomeUtente}}</button>
</form>
@endforeach
</div>


</div>
</body>
</html>