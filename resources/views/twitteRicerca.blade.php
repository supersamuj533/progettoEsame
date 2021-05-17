<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style10.css">
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
<div class="text1"><p>Ricerca Twitter</p></div>

<p class="text3">Inserisci una parola chiave o un argomento per trovare twitte che ti potrebbero interressare</p>


<div class="apriProfilo">
<form action="/33"  TARGET="twitte" method="get">
<label  for="" >
<input type="nome" name="parolaChiave" class="ricercaUtente" placeholder="Inserisci una parola chiave o argomento " >
</label>
<button  id="ricerca2" class="button7" >cerca </button>
</form>
</div>



<div class="bodyTwitte"><iframe NAME="twitte"  width="100%" height="100%"></iframe></div>






<div class='destra'>
<div class="tendenza">
@for ($i = 0; $i < 3; $i++)
 
<div >@:{{ $twitte[$i]->titolo }}</div>
<div >{{ $twitte[$i]->mip }}</div>
<div >:{{ $twitte[$i]->text }}</div>
<div >{{ $twitte[$i]->data}}</div>
  
@endfor
@for ($i = 0; $i < 3; $i++)

<div > {{ $utente[$i]->nomeUtente}}</div>
<div >{{ $utente[$i]->ami }}</div>
@endfor
</div>
</div>
</body>
</html>