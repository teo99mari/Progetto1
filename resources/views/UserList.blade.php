<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrazione impiegato</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="main-block">
    <h1>Lista impiegati</h1>
    <ul>
        <li>
            inserisci profilo
            <form action="/person/list" method="GET">
                <input type="text" name="profilo" id="profilo">
                <button type="submit">cerca</button>
            </form>

        </li>
        <li>nome-cognome-eta-altezzaInMetri-profilo</li>
        @foreach($impiegati as $impiegato)
            <li>
                <p>{{$impiegato->nome}},
                    {{$impiegato->cognome}},
                    {{$impiegato->eta}},
                    {{$impiegato->altezzaInMetri}},
                    {{$impiegato->profilo}}
                </p>
            </li>
        @endforeach
    </ul>
    <a href="/person">inserisci un impiegato</a>
</div>
</body>
</html>
