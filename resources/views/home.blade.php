<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi</title>
</head>
<body>
    <h1>HELLO WORLD!!!</h1>
    <h2>Benvenuto {{ $name }} {{ $lastname }} in {{ $project }}</h2>
    
    @if ($age < 30)
        <h3>Hai meno di 30 anni</h3>
    @elseif($age > 30)
        <h3>Hai più di 30 anni</h3>
    @else   
        <h3>Hai 30 anni</h3>
    @endif
</body>
</html>