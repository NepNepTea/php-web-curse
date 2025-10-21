@extends('template')

@section('title')
    <title>River Planet</title>
@endsection

@section('content')
<link rel="stylesheet" href="css/styleIndex.css">
    <section class="main1">
        <a href="{{ route('sales') }}" class="saleButton">
            <div><img src="images/sale.svg" alt="" class="saleIcon"></div>
            <p>АКЦИИ</p>
        </a>
        <div class="sureBlock">
            <p class="sureWords">содержать рыбку<br>проще чем котёнка</p>
            <img src="images/oFish.svg" alt="" class="ofish">
            <img src="images/wFish.svg" alt="" class="wfish">
            <a href="{{ route('guide') }}" class="sureButton">
                <p>УБЕДИТЬСЯ</p>
            </a>
        </div>
    </section>
    <section class="main2">
        <p>Какое оборудование вы можете приобрести у нас</p>
        <div class="brands">
            <div class="brandLine"><img src="images/tetra.svg" alt="" class="singleBrand"><img src="images/lagoon.svg" alt="" class="singleBrand"></div>
            <div class="brandLine"><img src="images/aquael.svg" alt="" class="singleBrand"><img src="images/sicce.png" alt="" class="singleBrand"></div>
        </div>
    </section>
@endsection
