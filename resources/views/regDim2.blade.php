<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, btn btn-primaryinitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
<div class="sfondo">

@foreach ($utente as $utentes)
<div class="emailPersa">Email:{{ $utentes->email }}</div>
<div class="passwordPersa">Password:{{$utentes->password  }}</div>

@endforeach

</div>
</body>
</html>