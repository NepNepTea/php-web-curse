@extends('template')

@section('title')
    <title>Каталог админ</title>
@endsection

@section('content')
    <link rel="stylesheet" href="css/styleTech.css">

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
    </div>
    <div class="catalog">
        <div class="category">
            <h1 class="catalogHeader">ВНУТРЕННИЕ ФИЛЬТРЫ</h1>

            @foreach ($products as $product)

                @if ($product->type == "filter")
                            <div class="card">
                                <div><img src="images/products/{{ $product->shortName }}.png" alt="{{ $product->shortName }}" width="200" class="product"></div>
                                <div class="secondBlock">
                                    <div class="information">
                                        <p>Название: {{ $product->full_name }} Руб.</p>
                                        <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                        <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                        <p>В наличие: {{ $product->status }} Шт.</p>
                                        <p>Цена: {{ $product->price }} Руб.</p>
                                        <p>Бренд: {{ $product->brand }} Руб.</p>
                                        <p>Тип: {{ $product->type }}</p>
                                    </div>
                                </div>
                                <div class="thirdBlock">
                                    <div>
                                        <form method="POST" action="{{route('delete-product', $product->id)}}">
                                            @csrf @method('DELETE')
                                            <input type="submit" value="Удалить">
                                        </form>
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
                            <div class="information">
                                <p>Название: {{ $product->full_name }} Руб.</p>
                                <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                <p>В наличие: {{ $product->status }} Шт.</p>
                                <p>Цена: {{ $product->price }} Руб.</p>
                                <p>Бренд: {{ $product->brand }} Руб.</p>
                                <p>Тип: {{ $product->type }}</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-product', $product->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
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
                            <div class="information">
                                <p>Название: {{ $product->full_name }} Руб.</p>
                                <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                <p>В наличие: {{ $product->status }} Шт.</p>
                                <p>Цена: {{ $product->price }} Руб.</p>
                                <p>Бренд: {{ $product->brand }} Руб.</p>
                                <p>Тип: {{ $product->type }}</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-product', $product->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
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
                            <div class="information">
                                <p>Название: {{ $product->full_name }} Руб.</p>
                                <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                <p>В наличие: {{ $product->status }} Шт.</p>
                                <p>Цена: {{ $product->price }} Руб.</p>
                                <p>Бренд: {{ $product->brand }} Руб.</p>
                                <p>Тип: {{ $product->type }}</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-product', $product->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
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
                            <div class="information">
                                <p>Название: {{ $product->full_name }} Руб.</p>
                                <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                <p>В наличие: {{ $product->status }} Шт.</p>
                                <p>Цена: {{ $product->price }} Руб.</p>
                                <p>Бренд: {{ $product->brand }} Руб.</p>
                                <p>Тип: {{ $product->type }}</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-product', $product->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
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
                            <div class="information">
                                <p>Название: {{ $product->full_name }} Руб.</p>
                                <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                <p>В наличие: {{ $product->status }} Шт.</p>
                                <p>Цена: {{ $product->price }} Руб.</p>
                                <p>Бренд: {{ $product->brand }} Руб.</p>
                                <p>Тип: {{ $product->type }}</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-product', $product->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
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
                            <div class="information">
                                <p>Название: {{ $product->full_name }} Руб.</p>
                                <p>Короткое название: {{ $product->shortName }} Руб.</p>
                                <p>Максимальный объем аквариума: {{ $product->max_value }} Л.</p>
                                <p>В наличие: {{ $product->status }} Шт.</p>
                                <p>Цена: {{ $product->price }} Руб.</p>
                                <p>Бренд: {{ $product->brand }} Руб.</p>
                                <p>Тип: {{ $product->type }}</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-product', $product->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
    </div>
@endsection
