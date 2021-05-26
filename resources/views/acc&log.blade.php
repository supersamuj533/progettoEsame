<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="sinistra">
<div class="immagine1">
<img src="https://expoitalyart.it/wp-content/uploads/2017/11/Twitter-logo-II.jpg" >
</div>
</div>


<div class="destro_alto">
    <div class="input">
<label class="input1" for="">
<input type="Email" name="Email" class="input1" placeholder="Nome Utente o Email"  >
</label>
<label class="input2" for=""  >
<input type="Password" name="Password" class="input2" placeholder="Password">
</label>
<span class="pass"><a href="http://localhost:8000/regDim"classe="pass">password dimenticata?</a></span>
</div>
<div class="logo">
<img src="https://th.bing.com/th/id/OIP.t1fyvKgDnUoIiC049MG48AHaHa?w=173&h=180&c=7&o=5&dpr=1.25&pid=1.7" > 
</div></div>
<div class="text" >
<p class="text1"> &nbsp;&nbsp; Accade adesso</p> <br> <br>
<p class="text2"> &nbsp;&nbsp;&nbsp;&nbsp; iscriviti adesso su twitter</p>
</div>
<div class="bottom" >
<form action="/accetta" method="get">
@csrf
<button  id="signup" class="iscriviti" >iscriviti</button>
</form>
<form action="/accesso" method="get">
@csrf
<button id="signin" class="accedi">accedi</button>
</form>
</div>

<span class="fine"><p><a href="https://about.twitter.com" >Chi Siamo</a>&nbsp;&nbsp;&nbsp;
<a href="https://help.twitter.com/it">Centro Assistenza</a>&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/it/tos">Termini di Servizio</a>&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/it/privacy">Informazioni sulla privacy</a>&nbsp;&nbsp;&nbsp;
<a href="https://help.twitter.com/it/rules-and-policies/twitter-cookies">norme sui cookies</a>&nbsp;&nbsp;&nbsp;
<a href="https://business.twitter.com/en/help/troubleshooting/how-twitter-ads-work.html">Informazioni sulla annunci</a>&nbsp;&nbsp;&nbsp;
<a href="https://blog.twitter.com/">Blog</a>&nbsp;&nbsp;&nbsp;
<a href="https://status.twitterstat.us/">Status</a>&nbsp;&nbsp;&nbsp;
<a href="https://careers.twitter.com/">Lavora con Noi</a>&nbsp;&nbsp;&nbsp;
<a href="https://about.twitter.com/press/brand-assets">Risorse del Brand</a>&nbsp;&nbsp;&nbsp;
<a href="https://status.twitterstat.us/">Pubblicità</a>&nbsp;&nbsp;&nbsp;
<a href="https://marketing.twitter.com/en">Marketing</a>&nbsp;&nbsp;&nbsp;
<a href="https://business.twitter.com/">Twitter per le Aziende</a>&nbsp;&nbsp;&nbsp;
<a href="https://developer.twitter.com/en">Sviluppatori</a>&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/i/directory/profiles"classe="fine">Elenco</a></br></p></span> 
<span class="fine2"> <p>
<a href="https://mobile.twitter.com/settings/account/personalization">Impostazioni</a>&nbsp;&nbsp;&nbsp;
© 2021 Samuel, Pucello.
</p></span> 

</div>


</body>
</html>