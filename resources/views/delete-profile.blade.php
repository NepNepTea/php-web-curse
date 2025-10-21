@extends('template')

@section('title')
    <title>Удалить профиль</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleConfirm.css">

    <div class="confirm">
        <p>Вы уверены что хотите удалить профиль?</p>
        <div class="buttons">
            <a href="{{ route('profile') }}" class="btn">Вернуться в профиль</a>
            <a href="" class="btn">Удалить</a>
        </div>
    </div>
@endsection
