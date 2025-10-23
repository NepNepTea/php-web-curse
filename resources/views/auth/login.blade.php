@extends('template')

@section('title')
    <title>Авторизация</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleLogin.css">

  <form method="POST" action="/login">
    <h1>Авторизация</h1>
    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" class="inputLine" required>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" class="inputLine">
    <div>
        <label for="remember">Запомнить меня</label><input type="checkbox" name="remember">
    </div>
    <input type="submit" value="Войти" class="btn">
  </form>
@endsection
