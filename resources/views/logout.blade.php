@extends('template')

@section('title')
    <title>Выход</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleConfirm.css">

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
