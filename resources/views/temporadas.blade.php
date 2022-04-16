<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/serie.css') }}">
    <title>Temporadas</title>
</head>
<body>
    <div class="container">
        <div id="topo" class="jumbotron mb-5">
            <h1>{{ $serie->nome_serie }}</h1>
        </div>
        <ul class="list-group mb-2">
            @foreach($temporadas as $temporada)
            <li class = "list-group-item">
                Temporada {{ $temporada->numero_temporada }}
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>