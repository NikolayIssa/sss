<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/form_style.css">
    <link rel="preload" href="styles/style.css" as="style" />
    <link rel="preload" href="styles/reset.css" as="style" />
    <link rel="icon" href="img/favicon/fav2.ico">
    <link rel= "dns-prefetch" href="http://matsuri.com/Menu.php" />
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://kit.fontawesome.com/e7d6517002.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="scripts/scripts.js"></script>
    <script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
    <title>МАЦУРИ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="scripts/wow.min.js"></script>
    <script>
              new WOW().init();
              </script>
</head>
<body style='overflow-x:hidden;'>

<div class="preloader">
            <div class="preloader__row">
              <div class="preloader__item"></div>
              <div class="preloader__item"></div>
            </div>
</div>

<script type="text/javascript">
      VK.init({
        apiId: 51507847,
        onlyWidgets: true
      });
</script>

<script>
            window.onload = function () {
            document.body.classList.add('loaded_hiding');
            window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
            }, 500);
              }
        </script>
    <header>
        <nav>
            <div class="nav_buttons">
            <a href="form.php">   <span ><img src="styles/img/logos/matsuri.png"></span></a>
            <a href="index.php">   <span class="niger">Главная</span></a>
            <a href="AboutUs.php"> <span class="niger">О Нас</span></a>
            <a href="Pizza.php">    <span class="niger">Меню</span></a>
            <a href="#popup" class="popap_link"><span class="niger">Отзывы</span></a>
        </div>
        <div class="societis_nav">
                <a href="https://vk.com/matsuri8886"><img src="styles/img/logos/icon-vk-seeklogo.com.svg"></a>
                <a href="https://www.instagram.com/matsuri8886/"><img src="styles/img/logos/instagram-seeklogo.com.svg"></a>
            </div>
        </nav>
    </header>
