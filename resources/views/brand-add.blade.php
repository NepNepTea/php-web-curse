@extends('template')

@section('head')
    <title>Новый бренд</title>
    <link rel="stylesheet" href="css/styleLogin.css">
@endsection

@section('content')

    <form method="POST" action="{{route('brand-add')}}" enctype="multipart/form-data">
        @csrf
        <h1>Добавить бренд</h1>
        <label for="name">Название:</label>
        <input type="text" id="name" name="name" class="inputLine" required>
        <label for="logo">Логотип (svg):</label>
        <input type="file" id="logo" name="logo">
        <input type="submit" value="Добавить" class="btn">
    </form>
@endsection
