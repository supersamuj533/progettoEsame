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
<button  id="botton1" class="botton1" >home</button>
</form></div>

<div>
<form action="/twitteRicerca" method="get">
<button  id="botton2" class="botton2" >Esplora</button>
</form></div>
<div>
<form action="/cestino" method="get">
<button  id="botton3" class="botton3" >Cestino</button>
</form></div>

<div>
<form action="/profilo" method="get">
<button  id="botton4" class="botton4" >Profilo</button>
</form></div>
<div>

</div>

<div>
<form action="/logout" method="get">
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
<div class="foto"><div ><img src="immagine/{{ $utentes->immagine}}" alt="Mia Immagine" width ="100%" height="86%" ></div></div>
@endforeach
</div>
<div class="bodyTwitte">
@foreach ($twitte as $twittes)

<tbody>
<tr class="a"><td class="b">
<div class="immt"><img src="immagine/{{ $twittes->imm}}" alt="Mia Immagine" width ="100%" height="100%" ></div>
<div >@:{{ $twittes->titolo }}</div>
<div >{{$twittes->text  }}</div>
<div >data:{{$twittes->data  }}</div>
<div class='nomeUtente'>Utente: {{ $twittes->utente}}</div>
@endforeach
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
<div >Data:{{ $twitte2[$i]->data}}</div>
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