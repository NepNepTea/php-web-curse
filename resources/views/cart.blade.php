@extends('template')

@section('head')
    <title>Корзина</title>
    <link rel="stylesheet" href="css/styleCart.css">
@endsection

@section('content')
    <div class="cartContent">
        @if($cartStatus != 'empty')
             @foreach ($contents as $content)
                <div class="card">
                    <div>
                        <img src="images/products/{{ $content->shortName }}.png" alt="{{ $content->shortName }}" width="200">
                    </div>
                    <div class="section1">
                        <h2 class="cardName">{{ $content->full_name }}</h2>
                        <p>В наличие: {{ $content->status }} Шт.</p>
                    </div>
                    <div class="section2">
                        <a href="{{ route('cart-delete', $content->id) }}"><img src="images/trash.svg" alt="" class="trashIcon"></a>
                        <p class="price">{{ $content->price }} Руб</p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="card">
                <p>Корзина пустая</p>
            </div>
        @endif
    </div>
    <div class="finalBlock">
        <div class="costBlock">
            <p>Итого:</p>
            <p>{{ $cost }} Руб</p>
        </div>
        <a href="{{ route('check') }}" class="buyBtn">Перейти к оформлению</a>
    </div>
@endsection
