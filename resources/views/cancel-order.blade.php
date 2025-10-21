@extends('template')

@section('title')
    <title>Отменить заказ</title>
@endsection

@section('content')
  <link rel="stylesheet" href="css/styleConfirm.css">

    <div class="confirm">
        <p>Вы уверены что хотите отменить заказ № 666666666?</p>
        <div class="buttons">
            <a href="{{ route('profile') }}" class="btn">Вернуться в профиль</a>
            <a href="" class="btn">Отменить заказ</a>
        </div>
    </div>
@endsection
