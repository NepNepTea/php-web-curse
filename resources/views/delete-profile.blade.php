@extends('template')

@section('head')
    <title>Удалить профиль</title>
    <link rel="stylesheet" href="css/styleConfirm.css">
@endsection

@section('content')
    <div class="confirm">
        <p>Вы уверены что хотите удалить профиль?</p>
        <div class="buttons">
            <a href="{{ route('profile') }}" class="btn">Вернуться в профиль</a>
            <a href="" class="btn">Удалить</a>
        </div>
    </div>
@endsection
