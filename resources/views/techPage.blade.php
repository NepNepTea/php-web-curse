<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Каталог оборудования</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/styleTech.css">
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
                        <a href="constructor.html">Добавить в конструктор</a>
                        <div><img src="images/check.svg" alt="" class="filterIcon"></div>
                    </div>
                    <div class="add">
                        <a href="">Добавить в корзину</a>
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
                        <a href="#">Добавить в конструктор</a>
                        <div><img src="images/check.svg" alt="" class="filterIcon"></div>
                    </div>
                    <div class="add">
                        <a href="#">Добавить в корзину</a>
                        <div><img src="images/cart.svg" alt="" class="filterIcon"></div>
                    </div>
                </div>
            </div>
        </div>
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