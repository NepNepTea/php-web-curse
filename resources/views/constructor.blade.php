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

                @if(!empty($fishTank))
                    <div class="singleComponent">
                        <p class="componentName">{{ $fishTank->full_name }}</p>
                        <div><img src="images/products/{{ $fishTank->shortName }}.png" alt="{{ $fishTank->shortName }}" class="product"></div>
                        <div class="info">
                            <div class="priceBlock">
                                <p>Цена</p>
                                <p class="price">{{ $fishTank->price}} Руб</p>
                            </div>
                            <a href="{{ route('catalog') }}" class="change">Заменить</a>
                        </div>
                    </div>
                @else
                    <div class="singleComponent">
                        <p class="componentName">Аквариум</p>
                        <div><img src="images/aquariumIcon.svg" alt="" class="icon"></div>
                        <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                    </div>
                @endif

                @if(!empty($filter))
                    <div class="singleComponent">
                        <p class="componentName">{{ $filter->full_name }}</p>
                        <div><img src="images/products/{{ $filter->shortName }}.png" alt="{{ $filter->shortName }}" class="product"></div>
                        <div class="info">
                            <div class="priceBlock">
                                <p>Цена</p>
                                <p class="price">{{ $filter->price}} Руб</p>
                            </div>
                            <a href="{{ route('catalog') }}" class="change">Заменить</a>
                        </div>
                    </div>
                @else
                    <div class="singleComponent">
                        <p class="componentName">Фильтр</p>
                        <div><img src="images/filter.svg" alt="" class="icon"></div>
                        <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                    </div>
                @endif


                    @if(!empty($soil))
                        <div class="singleComponent">
                            <p class="componentName">{{ $soil->full_name }}</p>
                            <div><img src="images/products/{{ $soil->shortName }}.png" alt="{{ $soil->shortName }}" class="product"></div>
                            <div class="info">
                                <div class="priceBlock">
                                    <p>Цена</p>
                                    <p class="price">{{ $soil->price}} Руб</p>
                                </div>
                                <a href="{{ route('catalog') }}" class="change">Заменить</a>
                            </div>
                        </div>
                    @else
                        <div class="singleComponent">
                            <p class="componentName">Грунт</p>
                            <div><img src="images/soil.svg" alt="" class="icon"></div>
                            <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                        </div>
                    @endif



                    @if(!empty($light))
                        <div class="singleComponent">
                            <p class="componentName">{{ $light->full_name }}</p>
                            <div><img src="images/products/{{ $light->shortName }}.png" alt="{{ $light->shortName }}" class="product"></div>
                            <div class="info">
                                <div class="priceBlock">
                                    <p>Цена</p>
                                    <p class="price">{{ $light->price}} Руб</p>
                                </div>
                                <a href="{{ route('catalog') }}" class="change">Заменить</a>
                            </div>
                        </div>
                    @else
                        <div class="singleComponent">
                            <p class="componentName">Освещение</p>
                            <div><img src="images/light.svg" alt="" class="icon"></div>
                            <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                        </div>
                    @endif

            </div>
        </div>
        <div>
            <h1 class="constHeader">ДЕКОР</h1>
            <div class="components">


                @if(!empty($wood))
                    <div class="singleComponent">
                        <p class="componentName">{{ $wood->full_name }}</p>
                        <div><img src="images/products/{{ $wood->shortName }}.png" alt="{{ $wood->shortName }}" class="product"></div>
                        <div class="info">
                            <div class="priceBlock">
                                <p>Цена</p>
                                <p class="price">{{ $wood->price}} Руб</p>
                            </div>
                            <a href="{{ route('catalog') }}" class="change">Заменить</a>
                        </div>
                    </div>
                @else
                    <div class="singleComponent">
                        <p class="componentName">Дерево</p>
                        <div><img src="images/log.svg" alt="" class="icon"></div>
                        <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                    </div>
                @endif


                    @if(!empty($stones))
                        <div class="singleComponent">
                            <p class="componentName">{{ $stones->full_name }}</p>
                            <div><img src="images/products/{{ $stones->shortName }}.png" alt="{{ $stones->shortName }}" class="product"></div>
                            <div class="info">
                                <div class="priceBlock">
                                    <p>Цена</p>
                                    <p class="price">{{ $stones->price}} Руб</p>
                                </div>
                                <a href="{{ route('catalog') }}" class="change">Заменить</a>
                            </div>
                        </div>
                    @else
                        <div class="singleComponent">
                            <p class="componentName">Камни</p>
                            <div><img src="images/rocks.svg" alt="" class="icon"></div>
                            <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                        </div>
                    @endif


                    @if(!empty($hideout))
                        <div class="singleComponent">
                            <p class="componentName">{{ $hideout->full_name }}</p>
                            <div><img src="images/products/{{ $hideout->shortName }}.png" alt="{{ $hideout->shortName }}" class="product"></div>
                            <div class="info">
                                <div class="priceBlock">
                                    <p>Цена</p>
                                    <p class="price">{{ $hideout->price}} Руб</p>
                                </div>
                                <a href="{{ route('catalog') }}" class="change">Заменить</a>
                            </div>
                        </div>
                    @else
                        <div class="singleComponent">
                            <p class="componentName">Укрытие</p>
                            <div><img src="images/castle.svg" alt="" class="icon"></div>
                            <a href="{{ route('catalog') }}" class="addButton">добавить</a>
                        </div>
                    @endif

                <div class="costBlock">
                    <div class="finalCost">
                        <p>ЦЕНА</p>
                        <div class="finalNumbers">{{ $cost }} Руб</div>
                    </div>
                    <div><a href="{{ route('checkFromConstructor') }}">КУПИТЬ</a></div>
                </div>

            </div>
        </div>
    </section>
    @if((!empty($filter) or !empty($light)) and !empty($fishTank) and ($filter->max_value < $fishTank->max_value or $light->max_value < $fishTank->max_value))
        <section class="warnings">
            @if(!empty($filter))
                @if($filter->max_value < $fishTank->max_value)
                    <div class="oneError"><img src="images/errorcros.svg" alt="" class="errorIcon"><p>Фильтр не совместим с выбранным аквариумом, необходим фильтр большей мощности</p></div>
                @endif
            @endif
            @if(!empty($light))
                @if($light->max_value < $fishTank->max_value)
                    <div class="oneError"><img src="images/errorcros.svg" alt="" class="errorIcon"><p>Яркости выбранной лампы не достаточно для данного обьема аквариума</p></div>
                @endif
            @endif
        </section>
    @endif
@endsection
