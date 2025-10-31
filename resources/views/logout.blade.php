@extends('template')

@section('head')
    <title>Выход</title>
    <link rel="stylesheet" href="css/styleConfirm.css">
@endsection

@section('content')
    <div class="confirm">
        <p>Вы уверены что хотите выйти?</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="buttons">
                <a href="{{ route('index') }}" class="btn">Вернуться на главную</a>
                <button type="submit" class="btn">Выйти</button>
            </div>
        </form>
    </div>
@endsection
