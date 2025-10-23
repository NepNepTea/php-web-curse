@extends('template')

@section('title')
    <title>Регистрация</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleLogin.css">

  <form method="POST" action="/register">
      @csrf
      <h1>Регистрация</h1>
      <label for="name">Имя:</label>
      <input type="text" id="name" name="name" class="inputLine" required>
      <label for="email">Почта:</label>
      <input type="email" id="email" name="email" class="inputLine" required>
      <label for="password">Пароль:</label>
      <input type="password" id="password" name="password" class="inputLine" required>
      <label for="password_confirmation">Повторите пароль:</label>
      <input type="password" id="password_confirmation" name="password_confirmation" class="inputLine" required>
      <input type="submit" value="Создать профиль" class="btn">
  </form>
@endsection
