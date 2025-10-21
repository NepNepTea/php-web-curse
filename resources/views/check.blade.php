@extends('template')

@section('title')
    <title>Оформление заказа</title>
@endsection

@section('content')
    <link rel="stylesheet" href="css/styleCheck.css">

    <form action="">
        <label for="phone">Телефон</label>
        <input type="tel" id="phone" name="phone" class="inputLine">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="inputLine">
        <hr>
        <p>Выберите магазин для самовывоза</p>
        <div>
            <input type="radio" id="shop1" name="shops" value="1">
            <label for="shop1">Ул ХХХХХХ, дом ХХ</label><br>
        </div>
        <input type="submit" value="Подтвердить заказ" class="btn">
    </form>
@endsection
