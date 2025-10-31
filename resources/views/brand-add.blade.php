@extends('template')

@section('head')
    <title>Новый бренд</title>
    <link rel="stylesheet" href="css/styleLogin.css">
@endsection

@section('content')

    <form method="POST" action="/brand-add">
        @csrf
        <h1>Добавить бренд</h1>
        <label for="name">Название:</label>
        <input type="text" id="name" name="name" class="inputLine" required>
        <label for="logo">Логотип:</label>
        <input type="file" id="logo" name="logo">
        <input type="submit" value="Добавить" class="btn">
    </form>
@endsection
