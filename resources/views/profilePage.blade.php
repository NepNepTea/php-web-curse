<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Профиль</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/styleProfile.css">
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
                  <a href="#">выйти</a>
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
    <div class="container1">
        <div class="userInfo">
            <p>имяПользователя</p>
            <p>pochta@pochta.ru</p>
        </div>
    </div>
    <h1>Мои заказы</h1>
    <div class="orders">
        <div class="order">
            <div class="infoLine">
                <div class="infoLine"><p>Заказ</p><p class="number">№ 66666666</p></div>
                <div class="infoLine"><p>Статус</p><p class="status">Готов</p></div>
            </div>
            <div class="infoLine"><p>Сумма</p><p class="cost">6 666 Руб</p></div>
            <div class="infoLine"><a href="#" class="cancel">отменить заказ</a></div>
        </div>
        <div class="order">
            <div class="infoLine">
                <div class="infoLine"><p>Заказ</p><p class="number">№ 44444444</p></div>
                <div class="infoLine"><p>Статус</p><p class="status">В сборке</p></div>
            </div>
            <div class="infoLine"><p>Сумма</p><p class="cost">4 444 Руб</p></div>
            <div class="infoLine"><a href="#" class="cancel">отменить заказ</a></div>
        </div>
    </div>
    <div class="container2">
        <a href="#" class="delete">удалить профиль</a>
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
            <a href="#"><img src="images/youtube.svg" alt="" class="socialIcon"></a>
            <a href="#"><img src="images/vknew.svg" alt="" class="socialIcon"></a>
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