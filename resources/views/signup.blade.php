@extends('template')

@section('title')
    <title>Регистрация</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleLogin.css">

  <form>
    <h1>Регистрация</h1>
    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" class="inputLine">
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" class="inputLine">
    <label for="passwordRepeat">Повторите пароль:</label>
    <input type="password" id="passwordRepeat" name="passwordRepeat" class="inputLine">
    <input type="submit" value="Создать профиль" class="btn">
  </form>
@endsection
