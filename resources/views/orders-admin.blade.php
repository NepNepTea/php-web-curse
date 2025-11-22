@extends('template')

@section('head')
    <title>Заказы админ</title>
    <link rel="stylesheet" href="css/styleTech.css">
@endsection

@section('content')
    <div class="catalog">
        <div class="category">
            <h1 class="catalogHeader">ЗАКАЗЫ</h1>

            @foreach ($orders as $order)
                <div class="card">
                    <div class="secondBlock">
                        <div class="information">
                            <h2>Заказ № {{ $order->code }}</h2>
                            <p>Дата заказа {{ $order->date }}</p>
                            <p>Товары: {{ $order->products }}</p>
                            <p>Покупатель {{ $order->user }}</p>
                            <p>Сумма {{ $order->cost }}</p>
                        </div>
                    </div>
                    <div class="thirdBlock">
                        <label for="status-select">Статус:</label>
                        <select name="status" id="status-select">
                            @foreach ($statuses as $status)
                                <option @if ($order->status == $status) selected @endif value="{{ $status }}">{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
