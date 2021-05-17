<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body><div class="sfondo">
    <div class="logo">
    <img src="https://th.bing.com/th/id/OIP.t1fyvKgDnUoIiC049MG48AHaHa?w=173&h=180&c=7&o=5&dpr=1.25&pid=1.7" > 
</div>
<div >    
<form action="/reg22" method="get">
<button  id="avanti" class="avanti" >avanti</button>
</div >
<div>
<p class="text1">Crea il tuo Account</p>
</div>
<div class="imput"  >
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>

@if($a==0)
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
@endif


@if($a==1)
<label  for=""  >
<input type="numero" name="numero" class="input10" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numero telefonico gia esistente"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
@endif
@if($a==2)
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input11" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email gia esistente" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
@endif


@if($a==3)
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input12" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome Utente gia esistente"  >
</label>
@endif




<label  for=""  >
<input type="password" name="password" class="input4" placeholder="password"  >
</label>


<label  for=""  >
<input type="anno" name="anno" class="input7" placeholder="anno"  >
</label>
<label  for=""  >
<input type="mese" name="mese" class="input8" placeholder="mese"  >
</label>
<label  for=""  >
<input type="giorno" name="giorno" class="input9" placeholder="giorno"  >
</label>



</form>

<div>
<p class="text2">Data di nascita</p>
<p class="text3">Non sarà visibile pubblicamente. Conferma la tua età, anche se questo account è per un'azienda, un animale o qualcos'altro.</p>
</div>





</div>
</body>
</html>