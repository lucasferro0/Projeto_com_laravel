<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <title>Login</title>
</head>
<body>
  <header>
    <h1>LifeBook</h1>
  </header>
  <form action="#" method="post">
    @csrf
    <main>
      <h1>Login</h1>
      <img id="logo_user" src="{{ asset('img/user-solid.svg') }}" alt="logo_user">
      <img id="logo_password" src="{{ asset('img/lock-solid.svg') }}" alt="logo_password">
      <input id="user" type="text" name="login" placeholder="Usuário">
      <input id="password" type="password" name="senha" placeholder="Senha">
      <button type="submit">Entrar</button>
    </main>
    <a href="/cadastro">Cadastre-se</a>
  </form>
</body>
</html>