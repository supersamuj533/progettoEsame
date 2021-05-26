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
@foreach ($utente as $utentes)

@if ($boolean=='true')
<form action="/utenteRicercato2" method="get"  TARGET="zonacentrale" class="buttonTwitte">
@csrf
<button  id="botton9" class="botton9" >Mostra Twitte</button>
</form>
@endif
@if ($boolean=='false')
<div class="buttonTwitte">
<button  id="botton9" class="botton9"  >Mostra Twitte</button>
</div>

@endif
@if ($boolean=='MYself')
<form action="/profilo2" method="get"  TARGET="zonacentrale" class="buttonTwitte">
@csrf
<button  id="botton9" class="botton9" >Mostra Twitte</button>
</form>
@endif
@endforeach
<div>
<p class="text4">3 passo:<br>Per Visualizzare i twitte dell' utente clicca sul pallino indicato dalla freccia a Centro pagine  e poi sul bottone MOSTRA TWITTE</p>
</div>

<div>
<form action="/logout" method="get">
@csrf
<button  id="botton5" class="botton5" >Log Out</button>
</form></div>








</div>
<div class='centro'>
<div class="text1"><p> Profilo</p></div>
<div class="countAmicizia">
@foreach($utenteA as $utenteAs)
Utenti che ti seguono:{{ $utenteAs->count}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@endforeach
@foreach($utenteR as $utenteRs)
Utenti che segui:{{ $utenteRs->count}}
@endforeach
</div>
<div class="utente">   
@foreach ($utente as $utentes)
Nome:{{ $utentes->nome}}<br><br>
Cognome:{{ $utentes->cognome}}<br><br>
Nome Utente:{{ $utentes->nomeUtente}}<br><br>
Data di Nascita:{{ $utentes->dataNascita}}
<div class="foto0"><div ><img src="immagine/{{ $utentes->immagine}}" alt="Mia Immagine" width ="101%" height="85%" ></div></div>
Bio:{{ $utentes->bio}}
@if ($boolean=='false')
<form action="/follow" method="get"   class="buttonTwitte" >
@csrf
<button  id="botton10" class="botton10"  >Segui</button>
</form>
@elseif ($boolean=='true')
<form action="/followDelete" method="get"   class="buttonTwitte" >
@csrf
<button  id="botton10" class="botton10" >Non Seguire</button>
</form>
@elseif ($boolean=='MYself')
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