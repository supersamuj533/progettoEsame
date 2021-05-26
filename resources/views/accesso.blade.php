<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<div class="sfondo">
<div class="logo">
    <img src="https://th.bing.com/th/id/OIP.t1fyvKgDnUoIiC049MG48AHaHa?w=173&h=180&c=7&o=5&dpr=1.25&pid=1.7" > 
</div>

<div>
<p class="text1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accedi a Twitter</p>
</div>



<div>    
<form action="/log22" method="get">
@csrf
<div class="imput"  >
<label class="input1" for="" >
<input type="Email" name="Email" class="input1" placeholder="Email" >
</label>
<label class="input2" for=""  >
<input type="Password" name="Password" class="input1" placeholder="Password" >
</label>
<button  id="accedi" class="accedi" >accedi</button>
</form>
</div >


@if($a==2)
<div class="errore"><p>Email o Password errata</p></div>
@endif

</div>
</body>
</html>