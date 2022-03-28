<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('css/adicionar_tarefa.css')?>">
    <title>Tarefas</title>
</head>
<body>
    <div class="container">
        <div id="topo" class="jumbotron mb-4">
            <h1>Adicionar tarefa</h1>
        </div>

        <form action="/agenda/adicionar" method="post">
            <div class="form-group">
                <label for="tarefa">Nome</label>
                <input type="text" class="fomr-control" name="tarefa">
                <button class="btn btn-primary" type="submit">Adicionar</button>
            </div>
        </form>
    </div>
</body>
</html>