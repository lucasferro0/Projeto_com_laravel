<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= asset('css/cadastro.css')?>">
  <title>Cadastro</title>
</head>
<body>
  <header>
    <h1>LifeBook</h1>
  </header>
  <form action="#" method="post">
    <main>
      <h1>Cadastro</h1>
      <img id="logo_user" src="<?= asset('img/user-solid.svg')?>" alt="logo_user">
      <img id="logo_password" src="<?= asset('img/lock-solid.svg')?>" alt="logo_password">
      <input id="user" name="login" type="text" placeholder="Usuário">
      <input id="password" name="senha" type="password" placeholder="Senha">
      <button type="submit">Registrar</button>
    </main>
    <a href="/">Faça seu login</a>
  </form>
</body>
</html>