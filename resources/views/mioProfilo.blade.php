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
<form action="/profilo2" method="get"  TARGET="zonacentrale" class="buttonTwitte">
@csrf
<button  id="botton6" class="botton6" >Mostra Twitte</button>
</form>
</div>

<div>
<form action="/logout" method="get">
@csrf
<button  id="botton5" class="botton5" >Log Out</button>
</form></div>








</div>
<div class='centro'>
<div class="text1"><p>Mio Profilo</p></div>
<div class="countAmicizia">

<div class="foto2">

<form action="/foto2" method="get"  >
@csrf
<label  for="" >&nbsp;&nbsp;
<input type="text" name="foto" class="input2" placeholder="Nome foto.estensione" >
</label>
<button  id="botton9" class="botton7" >invia</button>
</form>

</div>
@foreach($utenteA as $utenteAs)
Follower:{{ $utenteAs->count}}&nbsp;&nbsp;&nbsp;
@endforeach
@foreach($utenteR as $utenteRs)
Follow:{{ $utenteRs->count}}
@endforeach

</div>
<div class="utente">   
    <div class="dati">
@foreach ($utente as $utentes)
Nome:{{ $utentes->nome}}<br><br>
Cognome:{{ $utentes->cognome}}<br><br>
Nome Utente:{{ $utentes->nomeUtente}}<br><br>
Data:{{ $utentes->dataNascita}}
</div>


<div class="foto"><div ><img src="immagine/{{ $utentes->immagine}}" alt="Mia Immagine" width ="100%" height="85%" ></div></div>
@if($bio==1)
<div class="bio">BIO:{{ $utentes->bio}}

<form action="/modificaBio" method="get" class="buttonTwitte">
@csrf
</div>
<button  id="botton7" class="bosco" >modifica</button>
</form>
@endif
@if($bio==2)
<div class="bio" >
<form action="/modificaBio2" method="get"  >
@csrf
<label  for="" >
<input type="bio" name="bio" class="input" placeholder="Inserisci qui la tua nuova Bio" >
</label>
<button  id="botton8" class="bosco1" >fine</button>
</form>
</div>
@endif
@endforeach
</div>



<div class="bodyTwitte"><iframe NAME="zonacentrale"  width="100%" height="100%"></iframe></div>


</div>





<div class='destra'>
<p class="text2">1 Passo:<br> Cerca se i tuoi amici , il tuo vip preferito o altri hanno un account twitter inserendo il nome o possibile username 
qui sotto. </p>

<div class="ricercaProfilo">

<form action="/ricercaProfilo" TARGET="ricercaProfilo" method="get">
@csrf
<button  id="ricerca" class="button7" >Cerca</button>
<label  for="" >
<input type="nome" name="nomeUtente" class="ricercaUtente" placeholder="Inserisci qui il nome utente" >
</label>
</form>
</div>

<iframe NAME="ricercaProfilo"  width="100%" height="100%" class="ric"></iframe>
<p class="text3">2 Passo:<br>Inserisci qui sotto l' Username che hai trovato e clicca su Apri per visualizzare la pagine </p>


<div class="apriProfilo">
<form action="/utenteRicercato"  method="get">
@csrf
<button  id="ricerca2" class="button7" >Apri </button>
<label  for="" >
<input type="nome" name="nomeUtente2" class="ricercaUtente" placeholder="Inserisci qui il nome utente" >
</label>
</form>
</div>


</div>
</body>
</html>