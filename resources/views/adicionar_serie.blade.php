<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/adicionar_serie.css') }}">
    <title>Séries</title>
</head>
<body>
    <div class="container">
        <div id="topo" class="jumbotron mb-4">
            <h1>Adicionar série</h1>
        </div>
        @if ($errors->any())
        <div id="error" class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
        @endif
        <form action="/series/adicionar" method="post">
            @csrf
            <div class="row">
                <div id="col1">
                    <label for="serie">Nome</label>
                    <input type="text" class="fomr-control" name="nm_serie">
                    <button class="btn btn-primary" type="submit">Adicionar</button>
                </div>
                <div id="col2">
                    <label class="mb-2" for="temporada">N° de temporadas</label>
                    <input type="number" class="fomr-control" name="num_temporada">
                </div>
                <div id="col3">
                    <label class="mb-2" for="episodio">N° de episódios</label>
                    <input type="number" class="fomr-control" name="num_ep">
                </div>
            </div>
        </form>
    </div>
</body>
</html>