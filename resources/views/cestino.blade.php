<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style7.css">
</head>
<body>
<div class='sinistra'>



<div class="logo">
<img src="https://th.bing.com/th/id/OIP.t1fyvKgDnUoIiC049MG48AHaHa?w=173&h=180&c=7&o=5&dpr=1.25&pid=1.7" > 
</div>
<div>
<form action="/home" method="get">
@csrf
<button  id="botton1" class="botton1" >home</button>
</form></div>

<div>
<form action="/twitteRicerca" method="get">
@csrf
<button  id="botton2" class="botton2" >Esplora</button>
</form></div>
<div>
<form action="/cestino" method="get">
@csrf
<button  id="botton3" class="botton3" >Cestino</button>
</form></div>

<div>
<form action="/profilo" method="get">
@csrf
<button  id="botton4" class="botton4" >Profilo</button>
</form></div>
<div>
<form action="/cestino2" method="get"  TARGET="Cestino" >
@csrf
<button  id="botton6" class="botton6" >Mostra Twitte Eliminati</button>
</form>
</div>

<div>
<form action="/logout" method="get">
@csrf
<button  id="botton5" class="botton5" >Log Out</button>
</form></div>








</div>
<div class='centro'>
    
<div class="text1"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Home</p></div>
<div  class="divTwitte">
@foreach ($utente as $utentes)
Nome:{{ $utentes->nome}}<br><br>
Cognome:{{ $utentes->cognome}}<br><br>
Nome Utente:{{ $utentes->nomeUtente}}<br><br>
Data:{{ $utentes->dataNascita}}
<div class="fotooo"><div ><img src="immagine/{{ $utentes->immagine}}" alt="Mia Immagine" width ="100%" height="86%" ></div></div>
@endforeach
</div>

<div class="bodyTwitte">
<iframe NAME="Cestino"  width="100%" height="100%"></iframe>
</div>




</div>
<div class='destra'>
<div class="tendenza">
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 POST CON PIU' LIKE
<br>
@for ($i = 0; $i < 3; $i++)
<div class="t">
<div >@:{{ $twitte2[$i]->titolo }}</div>
<div >LIKE:{{ $twitte2[$i]->mip }}</div>
<div >Testo:{{ $twitte2[$i]->text }}</div>
</div>
@endfor
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 UTENTI CON PIU' AMICIZIE
<br>
@for ($i = 0; $i < 3; $i++)
<div class="u">
<div >Nome: {{ $utente2[$i]->nomeUtente}}</div>
<div >AMICIZIE:{{ $utente2[$i]->ami }}</div>
</div>
@endfor
</div>
</div>
</body>
</html>