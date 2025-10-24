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

            @foreach ($products as $product)

                @if ($product->type == "filter")
                            <div class="card">
                                <div><img src="images/products/{{ $product->short_name }}.png" alt="{{ $product->short_name }}" class="product"></div>
                                <div class="secondBlock">
                                    <h2 class="cardName">{{ $product->full_name }}</h2>
                                    <div class="information">
                                        <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                    </div>
                                </div>
                                <div class="thirdBlock">
                                    @foreach ($brands as $brand)
                                        @if ($brand->id == $product->brand)
                                            <div><img src="images/brands/{{ $brand->name }}.svg" alt="" class="brand"></div>
                                        @endif
                                    @endforeach
                                    <div class="price">{{ $product->price }} Руб</div>
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
                @endif

            @endforeach
        </div>
        <div class="category">
            <h1 class="catalogHeader">ОСВЕЩЕНИЕ</h1>
            @foreach ($products as $product)

                            @if ($product->type == "light")
                                        <div class="card">
                                            <div><img src="images/products/{{ $product->short_name }}.png" alt="{{ $product->short_name }}" class="product"></div>
                                            <div class="secondBlock">
                                                <h2 class="cardName">{{ $product->full_name }}</h2>
                                                <div class="information">
                                                    <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                                </div>
                                            </div>
                                            <div class="thirdBlock">
                                                @foreach ($brands as $brand)
                                                    @if ($brand->id == $product->brand)
                                                        <div><img src="images/brands/{{ $brand->name }}.svg" alt="" class="brand"></div>
                                                    @endif
                                                @endforeach
                                                <div class="price">{{ $product->price }} Руб</div>
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
                            @endif

                        @endforeach
        </div>
    </div>
@endsection
