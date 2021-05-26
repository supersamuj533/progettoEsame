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
<form action="/divtwitte" method="get"  TARGET="zonacentrale" >
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



<div class="text1"><p>Home </p></div>
<div class="message"><p >{{$message}} </p>
</div>


<form action="/twitte" method="get">
@csrf

<div  class="divTwitte">
<div> 
<button  id="twitteButton" class="twitteButton" >Twitte</button>
</div >

<div  >
<label  for="" >
<input type="text" name="titolo" class="tot" placeholder="Titolo del Twitte" >
</label></div>

<div >
<label  for="" >
<input  type="text" name="text" class="twitteInput" placeholder="Che c'è di nuovo?"   >
</label></div>

<div class="tipoTwitte" >
<label  for="" >
<input  type="text" name="tipo" class="tipo" placeholder="pubblico/privato"   >
</label></div>

<div class="imm" >
<label  for="" >
<input  type="text" name="imm"  class="im" placeholder="inserisci nome immaggine"   >
</label></div>





</div>
</form>



<div class="bodyTwitte"><iframe NAME="zonacentrale"  width="100%" height="100%"></iframe></div>






</div>
<div class='destra'>

<div class="tendenza">
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 POST CON PIU' LIKE
<br>
@for ($i = 0; $i < 3; $i++)
<div class="t">
<div >@:{{ $twitte[$i]->titolo }}</div>
<div >LIKE:{{ $twitte[$i]->mip }}</div>
<div >Testo:{{ $twitte[$i]->text }}</div>
</div>
@endfor
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 UTENTI CON PIU' AMICIZIE
<br>
@for ($i = 0; $i < 3; $i++)
<div class="u">
<div >Nome: {{ $utente[$i]->nomeUtente}}</div>
<div >AMICIZIE:{{ $utente[$i]->ami }}</div>
</div>
@endfor
</div>


</div>
</body>
</html>