@extends('template')

@section('head')
    <title>Профиль</title>
    <link rel="stylesheet" href="css/styleProfile.css">
@endsection

@section('content')
    <div class="container1">
        <div class="userInfo">
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>
    </div>
    <h1>Мои заказы</h1>
    <div class="orders">
        @foreach ($orders as $order)
            <div class="order">
                <div class="infoLine">
                    <div class="infoLine"><p>Заказ</p><p class="number">№ {{ $order->code }}</p></div>
                    <div class="infoLine"><p>Статус</p><p class="status">{{ $order->status }}</p></div>
                </div>
                <div class="infoLine"><p>Сумма</p><p class="cost">{{ $order->cost }} Руб</p></div>
            </div>
        @endforeach
    </div>
@endsection
