<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('css/agenda.css')?>">
    <title>Agenda</title>
</head>
<body>
    <div class="container">
        <div id="topo" class="jumbotron mb-5">
            <h1>Agenda</h1>
        </div>

        <a class="btn btn-dark mb-2" href="/agenda/adicionar">Adicionar</a>

        <ul class="list-group">
            @foreach($lista as $e)
                <li class = "list-group-item"><?= $e; ?></li>
            @endforeach
        </ul>
    </div>
</body>
</html>