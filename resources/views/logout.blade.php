@extends('template')

@section('title')
    <title>Выход</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleConfirm.css">

    <div class="confirm">
        <p>Вы уверены что хотите выйти?</p>
        <div class="buttons">
            <a href="index.html" class="btn">Вернуться на главную</a>
            <a href="" class="btn">Выйти</a>
        </div>
    </div>
@endsection
