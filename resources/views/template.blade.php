<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('title')
    <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head">
            <a href="{{ route('index') }}" class="logo">
                <div><img src="images/logo.svg" alt=""></div>
                <div>RIVER<br>PLANET</div>
            </a>
            <a href="{{ route('index') }}" class="logoMobile">
                <div><img src="images/logoMobile.svg" alt=""></div>
                <div>RIVER<br>PLANET</div>
            </a>
            <nav class="navigation">
                <div class="pageL"><a href="{{ route('constructor') }}">КОНСТРУКТОР АКВАРИУМОВ</a></div>
                <div class="pageR"><a href="{{ route('catalog') }}">КАТАЛОГ ОБОРУДОВАНИЯ</a></div>
            </nav>
            <a href="cart.html"><img src="images/cart.svg" alt="" class="cartMobile"></a>
            <div class="dropdown">
                <button class="dropbtn">МЕНЮ</button>
                <div class="dropdown-content">
                  <a href="{{ route('constructor') }}">конструктор аквариумов</a>
                  <a href="{{ route('catalog') }}">каталог оборудования</a>
                  <a href="{{ route('profile') }}">профиль</a>
                  <a href="{{ route('logout') }}">выйти</a>
                </div>
              </div>
        </div>
        <div class="user">
            @auth
                <img src="images/profile.svg" alt="">
                <a href="{{ route('profile') }}">{{ auth()->user()->name }}</a>
                <a href="{{ route('cart') }}"><img src="images/cart.svg" alt="" class="cart"></a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logoutBtn">Выйти</button>
                </form>
            @else
                <a href="{{ route('login') }}">войти</a>
                <a href="{{ route('register') }}">регистрация</a>
            @endauth
        </div>
    </header>
<main>
    @yield('content')
</main>
<footer>
    <div class="contactLeft">
        <div class="contacts">
            <p>Адрес магазина</p>
            <p>Ул. XXXXXX<br>Дом XXXXX</p>
        </div>
        <div class="contacts">
            <p>Контакты</p>
            <p>Телефон магазина<br>+7(966) 666 69 66</p>
        </div>
    </div>
    <div class="contactRight">
        <div class="socials">
            <a href="#"><img src="images/youtube.svg" alt="" class="socialIcon"></a>
            <a href="#"><img src="images/vknew.svg" alt="" class="socialIcon"></a>
        </div>
        <div class="contacts">
            <p>Посетителю</p>
            <div class="fLinks">
                <a href="{{ route('sales') }}">Акции</a>
                <a href="{{ route('guide') }}">Ваш первый аквариум</a>
            </div>
            <div class="fLinks">
                <a href="{{ route('constructor') }}">Конструктор</a>
                <a href="{{ route('catalog') }}">Оборудование</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
