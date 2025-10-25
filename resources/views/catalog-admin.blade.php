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
                                <form method="POST" action="{{route('update-product', $product->id)}}">
                                    @csrf @method('UPDATE')
                                    <label for="full_name">Название:</label>
                                    <input value="{{ $product->full_name }}" type="text" id="full_name" name="full_name" class="inputLine" required>
                                    <br>
                                    <label for="shortName">Короткое название (для фото):</label>
                                    <input value="{{ $product->shortName }}"  type="text" id="shortName" name="shortName" class="inputLine" required>
                                    <br>
                                    <label for="price">Цена:</label>
                                    <input value="{{ $product->price }}" type="number" id="price" name="price" class="inputLine" required>
                                    <br>
                                    <label for="max_value">Максимальный объем аквариума:</label>
                                    <input value="{{ $product->max_value }}" type="number" id="max_value" name="max_value" class="inputLine" required>
                                    <br>
                                    <label for="type-select">Тип продукта:</label>
                                    <select name="type" id="type-select">
                                        <option value="filter">Фильтр</option>
                                        <option selected value="light">Освещение</option>
                                        <option value="fish-tank">Аквариум</option>
                                        <option value="wood">Дерево</option>
                                        <option value="stones">Камни</option>
                                        <option value="Hideout">Укрытие</option>
                                        <option value="soil">Грунт</option>
                                    </select>
                                    <br>
                                    <label for="brand-select">Бренд:</label>
                                    <select name="brand" id="brand-select">
                                        @foreach ($brands as $brand)
                                            <option @if ($product->brand == $brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <label for="status">Количество:</label>
                                    <input  value="{{ $product->status }}" type="number" id="status" name="status" class="inputLine">
                                    <br>
                                    <input type="submit" value="Изменить" class="btn">
                                </form>
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
