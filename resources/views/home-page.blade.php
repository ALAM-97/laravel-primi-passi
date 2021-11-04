<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>Le mie informazioni</h1>
    <ul>
        <li>{{$nome}}</li>
        <li>{{$cognome}}</li>
        <li>{{$data_di_nascita}}</li>
        <li>{{$luogo_di_nascita}}</li>
        <li>{{$cod_fiscale}}</li>
    </ul>
    <h3>Caratteristiche</h3>
    <ul>
        @foreach ($caratteristiche as $caratteristica)
        <li>{{$caratteristica}}</li>
        @endforeach
    </ul>
</body>
</html>