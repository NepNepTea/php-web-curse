<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Корзина</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/styleCart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head">
            <a href="index.html" class="logo">
                <div><img src="images/logo.svg" alt=""></div>
                <div>RIVER<br>PLANET</div>
            </a>
            <a href="index.html" class="logoMobile">
                <div><img src="images/logoMobile.svg" alt=""></div>
                <div>RIVER<br>PLANET</div>
            </a>
            <nav class="navigation">
                <div class="pageL"><a href="constructor.html">КОНСТРУКТОР АКВАРИУМОВ</a></div>
                <div class="pageR"><a href="techPage.html">КАТАЛОГ ОБОРУДОВАНИЯ</a></div>
            </nav>
            <a href="cart.html"><img src="images/cart.svg" alt="" class="cartMobile"></a>
            <div class="dropdown">
                <button class="dropbtn">МЕНЮ</button>
                <div class="dropdown-content">
                    <a href="constructor.html">конструктор аквариумов</a>
                    <a href="techPage.html">каталог оборудования</a>
                    <a href="profilePage.html">профиль</a>
                    <a href="logout.html">выйти</a>
                </div>
            </div>
        </div>
        <div class="user">
            <img src="images/profile.svg" alt="">
            <a href="profilePage.html">имяПользователя</a>
            <a href="cart.html"><img src="images/cart.svg" alt="" class="cart"></a>
            <a href="logout.html">выйти</a>
        </div>
    </header>
<main>
    <div class="cartContent">
        <div class="card">
            <div>
                <img src="images/filterLagoona.png" alt="" class="product">
            </div>
            <div class="section1">
                <h2 class="cardName">Фильтр внутренний 150KF</h2>
                <p>В магазине : 14 декабря</p>
            </div>
            <div class="section2">
                <a href="#"><img src="images/trash.svg" alt="" class="trashIcon"></a>
                <p class="price">580 Руб</p>
            </div>
        </div>
        <div class="card">
            <div>
                <img src="images/lamp.png" alt="" class="product">
            </div>
            <div class="section1">
                <h2 class="cardName">Светильник светодиодный 30LD1</h2>
                <p>В магазине : 14 декабря</p>
            </div>
            <div class="section2">
                <a href="#"><img src="images/trash.svg" alt="" class="trashIcon"></a>
                <p class="price">3 050 Руб</p>
            </div>
        </div>
    </div>
    <div class="finalBlock">
        <div class="costBlock">
            <p>Итого:</p>
            <p>3 630 Руб</p>
        </div>
        <a href="check.html" class="buyBtn">Перейти к оформлению</a>
    </div>
</main>
<footer>
    <div class="contactLeft">
        <div class="contacts">
            <p>Адрес магазина</p>
            <p>Ул. XXXXXX<br>Дом XXXXX</p>
        </div>
        <div class="contacts">
            <div>Контакты</div>
            <p>Телефон магазина<br>+7(966) 666 69 66</p>
        </div>
    </div>
    <div class="contactRight">
        <div class="socials">
            <a href=""><img src="images/youtube.svg" alt="" class="socialIcon"></a>
            <a href=""><img src="images/vknew.svg" alt="" class="socialIcon"></a>
        </div>
        <div class="contacts">
            <p>Посетителю</p>
            <div class="fLinks">
                <a href="salesPage.html">Акции</a>
                <a href="guidePage.html">Ваш первый аквариум</a>
            </div>
            <div class="fLinks">
                <a href="constructor.html">Конструктор</a>
                <a href="techPage.html">Оборудование</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>