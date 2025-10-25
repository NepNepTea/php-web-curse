@extends('template')

@section('title')
    <title>Регистрация</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleLogin.css">

  <form method="POST" action="{{route('register')}}">
      @csrf
      <h1>Регистрация</h1>
      <label for="name">Имя:</label>
      <input type="text" id="name" name="name" class="inputLine" required>
      @error('name')
      <div>
          <span>{{ $message }}</span>
      </div>
      @enderror
      <label for="email">Почта:</label>
      <input type="email" id="email" name="email" class="inputLine" required>
      @error('email')
      <div>
          <span>{{ $message }}</span>
      </div>
      @enderror
      <label for="password">Пароль:</label>
      <input type="password" id="password" name="password" class="inputLine" required>
      @error('password')
      <div>
          <span>{{ $message }}</span>
      </div>
      @enderror
      <label for="password_confirmation">Повторите пароль:</label>
      <input type="password" id="password_confirmation" name="password_confirmation" class="inputLine" required>
      <input type="submit" value="Создать профиль" class="btn">
  </form>
@endsection
