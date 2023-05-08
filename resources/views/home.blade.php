<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Hello World</title>
</head>
<body>
    <h1> {{ $h1 }} </h1>
    <h2> {{ $h2 }} </h2>
    <p> {{ $p }} </p>

    <ul>
        <li><a href="{{ route('pagina1') }}">pagina1</a></li>
        <li><a href="{{ route('pagina2') }}">pagina2</a></li>
        <li><a href="{{ route('pagina3') }}">pagina3</a></li>
        <li><a href="{{ route('pagina4') }}">pagina4</a></li>
    </ul>
</body>
</html>