@extends('template')

@section('head')
    <title>Конструктор аквариума</title>
    <link rel="stylesheet" href="css/styleConstructor.css">
@endsection

@section('content')
    <section class="constructor">
        <div>
            <h1 class="constHeader">ОБЯЗАТЕЛЬНЫЕ КОМПОНЕНТЫ</h1>
            <div class="components">
                <div class="singleComponent">
                    <p class="componentName">Аквариум</p>
                    <div><img src="images/aquariumIcon.svg" alt="" class="icon"></div>
                    <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                </div>
                <div class="singleComponent">
                    <p class="componentName">Фильтр внутренний 150KF</p>
                    <div><img src="images/filterLagoona.png" alt="" class="product"></div>
                    <div class="info">
                        <div class="priceBlock">
                            <p>Цена</p>
                            <p class="price">580 Руб</p>
                        </div>
                        <a href="{{ route('catalog') }}" class="change">Заменить</a>
                    </div>
                </div>
                <div class="singleComponent">
                    <p class="componentName">Грунт</p>
                    <div><img src="images/soil.svg" alt="" class="icon"></div>
                    <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                </div>
                <div class="singleComponent">
                    <p class="componentName">Освещение</p>
                    <div><img src="images/light.svg" alt="" class="icon"></div>
                    <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                </div>
            </div>
        </div>
        <div>
            <h1 class="constHeader">ДЕКОР</h1>
            <div class="components">
                <div class="singleComponent">
                    <p class="componentName">Дерево</p>
                    <div><img src="images/log.svg" alt="" class="icon"></div>
                    <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                </div>
                <div class="singleComponent">
                    <p class="componentName">Камни</p>
                    <div><img src="images/rocks.svg" alt="" class="icon"></div>
                    <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                </div>
                <div class="singleComponent">
                    <p class="componentName">Укрытие</p>
                    <div><img src="images/castle.svg" alt="" class="icon"></div>
                    <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                </div>
                <div class="costBlock">
                    <div class="finalCost">
                        <p>ЦЕНА</p>
                        <div class="finalNumbers">0 Руб</div>
                    </div>
                    <div><a href="{{ route('cart') }}">КУПИТЬ</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="warnings">
        <div class="oneError"><img src="images/errorcros.svg" alt="" class="errorIcon"><p>Фильтр не совместим с выбранным аквариумом, необходим фильтр большей мощности</p></div>
        <div class="oneError"><img src="images/errorcros.svg" alt="" class="errorIcon"><p>Яркости выбранной лампы не достаточно для данного обьема аквариума</p></div>
    </section>
@endsection
