<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/serie.css') }}">
    <title>Séries</title>
</head>
<body>
    <div class="container">
        <div id="topo" class="jumbotron mb-5">
            <h1>Séries</h1>
        </div>
        @if (isset($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
        @endif
        <a class="btn btn-dark mb-2" href="/series/adicionar">Adicionar</a>

        <ul class="list-group">
            @foreach($series as $registro)
                <li class = "list-group-item d-flex justify-content-between align-items-center">
                    {{ $registro->nome_serie; }} 
                    <form action="/series/remover/{{ $registro->cod_serie }}" method="post" onsubmit="return confirm('Deseja excluir a série {{ $registro->nome_serie }} ?')">
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">
                            <img id="logo_del" src="{{ asset('img/delete_img.svg') }}" alt="logo_delete">
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>