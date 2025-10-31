@extends('template')

@section('head')
    <title>Акции</title>
    <link rel="stylesheet" href="css/styleSale.css">
@endsection

@section('content')
    <div class="salesBlock">
        <h1 class="saleHeader">действующие акции</h1>
        <div><img src="images/sale.png" class="oneSale"></div>
        <div class="wait">
            <p>Новые предложения появятся скоро</p>
            <div><img src="images/hour.svg" class="hourGlass"></div>
        </div>
    </div>
@endsection
