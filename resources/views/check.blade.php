@extends('template')

@section('head')
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="css/styleCheck.css">
@endsection

@section('content')
    <form method="POST" action="{{ route('order-add', $page) }}">
        @csrf
        @foreach ($products as $product)
            <p>{{ $product->full_name }} {{ $product->price }} Руб.</p>
        @endforeach
        <hr>
        <label for="phone">Телефон</label>
        <input type="tel" id="phone" name="phone" class="inputLine">
        <hr>
        <input type="submit" value="Подтвердить заказ" class="btn">
    </form>
@endsection
