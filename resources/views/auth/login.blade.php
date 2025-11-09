@extends('template')

@section('head')
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/styleLogin.css">
@endsection

@section('content')
  <form method="POST" action="{{route('login')}}">
      @csrf
    <h1>Авторизация</h1>
    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" class="inputLine" required>
      @error('email')
      <div>
          <span>{{ $message }}</span>
      </div>
      @enderror
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" class="inputLine">
      @error('password')
      <div>
          <span>{{ $message }}</span>
      </div>
      @enderror
    <div>
        <label for="remember">Запомнить меня</label><input type="checkbox" name="remember">
    </div>
    <input type="submit" value="Войти" class="btn">
    <a href="{{ route('register') }}">Создать аккаунт</a>
  </form>
@endsection
