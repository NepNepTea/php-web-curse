@extends('template')

@section('head')
    <title>Каталог</title>
    <link rel="stylesheet" href="css/styleTech.css">
@endsection

@section('content')
    <div class="filter">
        <div class="sort">
            <p>Бренд:</p>
            <select name="brandFilter" id="select">
                <option value="all">все</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
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
                                <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                                <div class="secondBlock">
                                    <h2 class="cardName">{{ $product->full_name }}</h2>
                                    <div class="information">
                                        <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                        @if ($product->status > 0)
                                            <p>В наличие: {{ $product->status }} Шт.</p>
                                        @else
                                            <p>Нет в наличие</p>
                                        @endif
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
                                        <form method="POST" action="{{route('constructor-add', $product->id)}}">
                                            @csrf
                                            <input type="submit" value="Добавить в конструктор">
                                        </form>
                                        <div><img src="images/check.svg" alt="" class="filterIcon"></div>
                                    </div>
                                    <div class="add">
                                        @if ($product->status > 0)
                                            <a href="{{ route('cart') }}">Добавить в корзину</a>
                                            <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                        @endif
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
                        <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <h2 class="cardName">{{ $product->full_name }}</h2>
                            <div class="information">
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                @if ($product->status > 0)
                                    <p>В наличие: {{ $product->status }} Шт.</p>
                                @else
                                    <p>Нет в наличие</p>
                                @endif
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
                                @if ($product->status > 0)
                                    <a href="{{ route('cart') }}">Добавить в корзину</a>
                                    <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

                @endforeach
        </div>
        <div class="category">
            <h1 class="catalogHeader">АКВАРИУМЫ</h1>
            @foreach ($products as $product)

                @if ($product->type == "fish-tank")
                    <div class="card">
                        <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <h2 class="cardName">{{ $product->full_name }}</h2>
                            <div class="information">
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                @if ($product->status > 0)
                                    <p>В наличие: {{ $product->status }} Шт.</p>
                                @else
                                    <p>Нет в наличие</p>
                                @endif
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
                                @if ($product->status > 0)
                                    <a href="{{ route('cart') }}">Добавить в корзину</a>
                                    <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
        <div class="category">
            <h1 class="catalogHeader">ГРУНТ</h1>
            @foreach ($products as $product)

                @if ($product->type == "soil")
                    <div class="card">
                        <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <h2 class="cardName">{{ $product->full_name }}</h2>
                            <div class="information">
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                @if ($product->status > 0)
                                    <p>В наличие: {{ $product->status }} Шт.</p>
                                @else
                                    <p>Нет в наличие</p>
                                @endif
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
                                @if ($product->status > 0)
                                    <a href="{{ route('cart') }}">Добавить в корзину</a>
                                    <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
        <div class="category">
            <h1 class="catalogHeader">УКРЫТИЯ</h1>
            @foreach ($products as $product)

                @if ($product->type == "hideout")
                    <div class="card">
                        <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <h2 class="cardName">{{ $product->full_name }}</h2>
                            <div class="information">
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                @if ($product->status > 0)
                                    <p>В наличие: {{ $product->status }} Шт.</p>
                                @else
                                    <p>Нет в наличие</p>
                                @endif
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
                                @if ($product->status > 0)
                                    <a href="{{ route('cart') }}">Добавить в корзину</a>
                                    <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
        <div class="category">
            <h1 class="catalogHeader">КАМНИ</h1>
            @foreach ($products as $product)

                @if ($product->type == "stones")
                    <div class="card">
                        <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <h2 class="cardName">{{ $product->full_name }}</h2>
                            <div class="information">
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                @if ($product->status > 0)
                                    <p>В наличие: {{ $product->status }} Шт.</p>
                                @else
                                    <p>Нет в наличие</p>
                                @endif
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
                                @if ($product->status > 0)
                                    <a href="{{ route('cart') }}">Добавить в корзину</a>
                                    <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
        <div class="category">
            <h1 class="catalogHeader">ДЕКОРАТИВНОЕ ДЕРЕВО</h1>
            @foreach ($products as $product)

                @if ($product->type == "wood")
                    <div class="card">
                        <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <h2 class="cardName">{{ $product->full_name }}</h2>
                            <div class="information">
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                @if ($product->status > 0)
                                    <p>В наличие: {{ $product->status }} Шт.</p>
                                @else
                                    <p>Нет в наличие</p>
                                @endif
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
                                @if ($product->status > 0)
                                    <a href="{{ route('cart') }}">Добавить в корзину</a>
                                    <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
    </div>
@endsection
