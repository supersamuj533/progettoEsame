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

@if($a==0)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
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
@endif


@if($a==1)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
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
@endif
@if($a==2)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
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
@endif


@if($a==3)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="inputtt" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome Utente gia esistente"  >
</label>
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
@endif
@if($a==4)
<label  for="" >
<input type="nome" name="nome" class="input12" placeholder="x
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inserisci un nome Max:20 carratteri" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
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
@endif
@if($a==5)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input16" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inserisci un cognome Max:20 carratteri" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero telefonico"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
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
@endif
@if($a==6)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input11t" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inserisci un numero telefonico valido"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
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
@endif
@if($a==7)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero"  >
</label>
<label  for="" >
<input type="email" name="email" class="input13" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inserisci un email valida" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
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
@endif
@if($a==8)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder="Nome Utente"  >
</label>
<label  for=""  >
<input type="password" name="password" class="input14" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inserisci password valida max:20 caratteri"  >
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
@endif
@if($a==9)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input15" placeholder="x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inserisci un nome utente valida max:20 caratteri"  >
</label>
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
@endif
@if($a==10)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder=" utente "  >
</label>
<label  for=""  >
<input type="password" name="password" class="input4" placeholder="password"  >
</label>
<label  for=""  >
<input type="anno" name="anno" class="input17" placeholder="Max/min: 4 cifre"  >
</label>
<label  for=""  >
<input type="mese" name="mese" class="input8" placeholder="mese"  >
</label>
<label  for=""  >
<input type="giorno" name="giorno" class="input9" placeholder="giorno"  >
</label>
@endif
@if($a==11)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder=" utente "  >
</label>
<label  for=""  >
<input type="password" name="password" class="input4" placeholder="password"  >
</label>
<label  for=""  >
<input type="anno" name="anno" class="input7" placeholder="anno "  >
</label>
<label  for=""  >
<input type="mese" name="mese" class="input18" placeholder="Max/min: 2 cifre"  >
</label>
<label  for=""  >
<input type="giorno" name="giorno" class="input9" placeholder="giorno"  >
</label>
@endif
@if($a==12)
<label  for="" >
<input type="nome" name="nome" class="input2" placeholder="nome" >
</label>
<label  for="" >
<input type="cognome" name="cognome" class="input6" placeholder="cognome" >
</label>
<label  for=""  >
<input type="numero" name="numero" class="input1" placeholder="numero"  >
</label>
<label  for="" >
<input type="email" name="email" class="input3" placeholder="email" >
</label>
<label  for=""  >
<input type="nomeUtente" name="nomeUtente" class="input5" placeholder=" utente "  >
</label>
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
<input type="giorno" name="giorno" class="input19" placeholder="Max/min: 2 cifre"  >
</label>
@endif
</form>

<div>
<p class="text2">Data di nascita</p>
<p class="text3">Non sarà visibile pubblicamente. Conferma la tua età, anche se questo account è per un'azienda, un animale o qualcos'altro.</p>
</div>





</div>
</body>
</html>