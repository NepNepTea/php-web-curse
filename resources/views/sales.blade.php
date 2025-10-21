@extends('template')

@section('title')
    <title>Акции</title>
@endsection

@section('content')
    <link rel="stylesheet" href="css/styleSale.css">

    <div class="salesBlock">
        <h1 class="saleHeader">действующие акции</h1>
        <div><img src="images/sale.png" class="oneSale"></div>
        <div class="wait">
            <p>Новые предложения появятся скоро</p>
            <div><img src="images/hour.svg" class="hourGlass"></div>
        </div>
    </div>
@endsection
