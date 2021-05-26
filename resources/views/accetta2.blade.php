<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<div class="sfondo">
    <div class="logo">
    <img src="https://th.bing.com/th/id/OIP.t1fyvKgDnUoIiC049MG48AHaHa?w=173&h=180&c=7&o=5&dpr=1.25&pid=1.7" > 
</div>
<div >    
<form action="/accettaCont" method="get">
@csrf
<div>
<p class="text2">Accetta trattazione dei dati</p>
<p class="text3">Presa coscienza del fatto che abilito il sito a condividere i Dati condivisi o a cui il sito a accesso</p>
<input type="checkbox" id="accetto1" name="accetto1" value="si" class="checkbox">
</div>


<div>
<p class="text4">Dichiarazione di intenti</p>
<p class="text5">Dichiaro di assumermi ogni responsabilità per le azioni e i &nbsp;&nbsp;&nbsp;messaggi che scriverò</p>
<input type="checkbox" id="accetto2" name="accetto2" value="si" class="checkbox2">
</div>
<button  id="avanti" class="accedi" >avanti</button>
</form>
</div >
<div>
<p class="text1">Personalizza la tua esperienza</p>




<span class="x"><p><a href="/22" >x</a></span>
<div>
    <p class="errore">Se non accetti le Condizioni non potrai continuare con la registrazione</p>
</div>




</div>
</body>
</html>