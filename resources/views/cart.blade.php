@extends('template')

@section('head')
    <title>Корзина</title>
    <link rel="stylesheet" href="css/styleCart.css">
@endsection

@section('content')
    <div class="cartContent">
        <div class="card">
            <div>
                <img src="images/filterLagoona.png" alt="" class="product">
            </div>
            <div class="section1">
                <h2 class="cardName">Фильтр внутренний 150KF</h2>
                <p>В магазине : 14 декабря</p>
            </div>
            <div class="section2">
                <a href="#"><img src="images/trash.svg" alt="" class="trashIcon"></a>
                <p class="price">580 Руб</p>
            </div>
        </div>
        <div class="card">
            <div>
                <img src="images/lamp.png" alt="" class="product">
            </div>
            <div class="section1">
                <h2 class="cardName">Светильник светодиодный 30LD1</h2>
                <p>В магазине : 14 декабря</p>
            </div>
            <div class="section2">
                <a href="#"><img src="images/trash.svg" alt="" class="trashIcon"></a>
                <p class="price">3 050 Руб</p>
            </div>
        </div>
    </div>
    <div class="finalBlock">
        <div class="costBlock">
            <p>Итого:</p>
            <p>3 630 Руб</p>
        </div>
        <a href="{{ route('check') }}" class="buyBtn">Перейти к оформлению</a>
    </div>
@endsection
