@extends('template')

@section('head')
    <title>Профиль</title>
    <link rel="stylesheet" href="css/styleProfile.css">
@endsection

@section('content')
    <div class="container1">
        <div class="userInfo">
            <p>имяПользователя</p>
            <p>pochta@pochta.ru</p>
        </div>
    </div>
    <h1>Мои заказы</h1>
    <div class="orders">
        <div class="order">
            <div class="infoLine">
                <div class="infoLine"><p>Заказ</p><p class="number">№ 66666666</p></div>
                <div class="infoLine"><p>Статус</p><p class="status">Готов</p></div>
            </div>
            <div class="infoLine"><p>Сумма</p><p class="cost">6 666 Руб</p></div>
            <div class="infoLine"><a href="{{ route('cancel-order') }}" class="cancel">отменить заказ</a></div>
        </div>
        <div class="order">
            <div class="infoLine">
                <div class="infoLine"><p>Заказ</p><p class="number">№ 44444444</p></div>
                <div class="infoLine"><p>Статус</p><p class="status">В сборке</p></div>
            </div>
            <div class="infoLine"><p>Сумма</p><p class="cost">4 444 Руб</p></div>
            <div class="infoLine"><a href="{{ route('cancel-order') }}" class="cancel">отменить заказ</a></div>
        </div>
    </div>
    <div class="container2">
        <a href="{{ route('delete-profile') }}" class="delete">удалить профиль</a>
    </div>
@endsection
