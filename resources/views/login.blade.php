<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Вход</title>
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="css/styleLogin.css">
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
  <form>
    <h1>Авторизация</h1>
    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" class="inputLine">
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" class="inputLine">
    <input type="submit" value="Войти" class="btn">
  </form>
</main>
</body>
</html>