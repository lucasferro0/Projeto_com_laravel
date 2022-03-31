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

        <form action="/series/adicionar" method="post">
            @csrf
            <div class="form-group">
                <label for="serie">Nome</label>
                <input type="text" class="fomr-control" name="nome">
                <button class="btn btn-primary" type="submit">Adicionar</button>
            </div>
        </form>
    </div>
</body>
</html>