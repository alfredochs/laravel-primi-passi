@php
$titolo= "La mia Prima pagina"
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima Pagina</title>
</head>

<body>
    <h1>{{$titolo}}</h1>
    <h2>{{$nome}}{{$cognome}}</h2>
    @if(count($lista ?? ''>0))

    <ul>
        @foreach($lista ?? '' as $elemento)

        <li>
            {{$loop->index}}
            {{$elemento}}</li>
        @endforeach
    </ul>
    @else
    <p>"Nessun dato disponibile"</p>
    @endif

    <a href="{{route('link')}}">Apri enlace</a>

</body>

</html>
