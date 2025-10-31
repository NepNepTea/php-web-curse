@extends('template')

@section('head')
    <title>Отменить заказ</title>
    <link rel="stylesheet" href="css/styleConfirm.css">
@endsection

@section('content')
    <div class="confirm">
        <p>Вы уверены что хотите отменить заказ № 666666666?</p>
        <div class="buttons">
            <a href="{{ route('profile') }}" class="btn">Вернуться в профиль</a>
            <a href="" class="btn">Отменить заказ</a>
        </div>
    </div>
@endsection
