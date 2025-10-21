@extends('template')

@section('title')
    <title>Каталог</title>
@endsection

@section('content')
    <link rel="stylesheet" href="css/styleTech.css">

    <div class="filter">
        <div class="sort">
            <p>Сортировка:</p>
            <select id="select">
                <option value="value1">По дате появления</option>
                <option value="value2" selected>По возрастанию цены</option>
                <option value="value3">По убыванию цены</option>
            </select>
        </div>
        <div class="garanty">
            <div class="garantyFlex">
                <p>О гарантии</p>
                <div><img src="images/question.svg" alt="" class="filterIcon"></div>
            </div>
            <div class="garantyContent">
                <div class="flexContent">
                    <div class="info">
                        <h3>О гарантии</h3>
                        <p>На любое купленное оборудование в нашем магазине действует гарантия 6 месяцев. Также вы всегда можете проверить качество и работоспособность товара перед покупкой</p>
                    </div>
                    <div><img src="images/check__icon.svg" alt="" class="garantyCheck"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="category">
            <h1 class="catalogHeader">ВНУТРЕННИЕ ФИЛЬТРЫ</h1>
            <div class="card">
                <div><img src="images/filterLagoona.png" alt="" class="product"></div>
                <div class="secondBlock">
                    <h2 class="cardName">Фильтр внутренний 150KF</h2>
                    <div class="information">
                        <p>Размеры: 43*30*80мм</p>
                        <p>Материал/состав: пластик, металл</p>
                        <p>Мощность: 2,8Вт</p>
                        <p>Производительность: 200л/ч</p>
                    </div>
                </div>
                <div class="thirdBlock">
                    <div><img src="images/lagoon.svg" alt="" class="brand"></div>
                    <div class="price">580 Руб</div>
                    <div class="add">
                        <a href="{{ route('constructor') }}">Добавить в конструктор</a>
                        <div><img src="images/check.svg" alt="" class="filterIcon"></div>
                    </div>
                    <div class="add">
                        <a href="{{ route('cart') }}">Добавить в корзину</a>
                        <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category">
            <h1 class="catalogHeader">ОСВЕЩЕНИЕ</h1>
            <div class="card">
                <div><img src="images/lamp.png" alt="" class="product"></div>
                <div class="secondBlock">
                    <h2 class="cardName">Светильник светодиодный 30LD1</h2>
                    <div class="information">
                        <p>Размеры: 85*17*240мм</p>
                        <p>Материал/состав: металл</p>
                        <p>Мощность: 10Вт</p>
                        <p>Количество светодиодов: 24 белых/12 красных</p>
                    </div>
                </div>
                <div class="thirdBlock">
                    <div><img src="images/lagoon.svg" alt="" class="brand"></div>
                    <div class="price">3 050 Руб</div>
                    <div class="add">
                        <a href="{{ route('constructor') }}">Добавить в конструктор</a>
                        <div><img src="images/check.svg" alt="" class="filterIcon"></div>
                    </div>
                    <div class="add">
                        <a href="{{ route('cart') }}">Добавить в корзину</a>
                        <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
