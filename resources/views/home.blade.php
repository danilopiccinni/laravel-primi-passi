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


    <h3>link creati singolarmente </h3>
    <ul>
        <li><a href="{{ route('pagina1') }}">pagina1</a></li>
        <li><a href="{{ route('pagina2') }}">pagina2</a></li>
        <li><a href="{{ route('pagina3') }}">pagina3</a></li>
        <li><a href="{{ route('pagina4') }}">pagina4</a></li>
    </ul>

    <hr>

    <h3>link creati con un foreach </h3>
    <ul>
        @foreach ($links as $link)
            <li><a href="{{ route($link) }}">{{ $link }}</a></li>
        @endforeach
    </ul>

    <hr>

    <h3>lista bottoni togglati (pratica a caso)</h3>
    <ul>
        @foreach ($buttons as $button)
            <li ><button style="color: {{ $button['color'] }}" onclick="clicca('{{ $button['name'] }}', '{{ $button['color'] }}')" >{{$button['name']}}</button></li>
        @endforeach
    </ul>

    <p id="messaggio"></p>

</body>
</html>

<script>

function clicca(mess,color) {
    let messaggio = document.getElementById("messaggio")
    if (messaggio.innerHTML != 'Bravo hai eseguito un ' + mess + '. ' + 'Ora se riclicchi ' + mess + ' sparirà' ) {
        console.log(mess)
        messaggio.innerHTML = 'Bravo hai eseguito un ' + mess +'. '  + 'Ora se riclicchi ' + mess + ' sparirà'
        messaggio.style= 'color :' + color
    } else if (messaggio.innerHTML == 'Bravo hai eseguito un '  +  mess + '. ' + 'Ora se riclicchi ' + mess + ' sparirà') {
        messaggio.innerHTML = ''
    }
}

</script>


<style lang="scss">

    body {
        display: flex;
        flex-flow: column nowrap;
        align-items: center;
    }

    ul {
        display: flex;
        justify-content: center;
        gap: 30px
    }


</style>