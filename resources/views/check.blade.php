@extends('template')

@section('head')
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="css/styleCheck.css">
@endsection

@section('content')
    <form action="">
        @foreach ($products as $product)
            <p>{{ $product->fullName }}</p>
        @endforeach
            @foreach ($productsid as $cock)
                <p>{{ $cock }}</p>
            @endforeach
        <hr>
        <label for="phone">Телефон</label>
        <input type="tel" id="phone" name="phone" class="inputLine">
        <hr>
        <input type="submit" value="Подтвердить заказ" class="btn">
    </form>
@endsection
