<?php
    include("include/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>проекты Вавилона</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext"
        rel="stylesheet">
</head>

<body>
    <div class="header" id="header">
        <div class="header_info">
            <div class="location_info">
                <img class="header__img" src="images/map.png" alt="">
                <p>г.Минск пр. Победителей 23к1 офис 15</p>
            </div>
            <div class="find_info_block">
                <img class="header__img" src="images/search.png" alt="">
                <label for="text">Поиск</label>
                <input type="text" class="find_info">
            </div>
            <div class="phone_info">
                <img class="header__img" src="images/phone.png" alt="">
                <p>+375 (44) 710-03-12</p>
            </div>
            <div class="message_us">
                <img class="header__img" src="images/messageus.png" alt="">
                <p>Написать</p>
            </div>
            <div class="logos">
                <img class="logos__img" src="images/facebook.png">
                <img class="logos__img" src="images/insta.png" alt="">
                <img class="logos__img" src="images/vk.png" alt="">
            </div>
        </div>
        <div class="header_logo">
            <a href="index.php"><img src="images/Logo.png" alt=""></a>
            <div class="navigation">
                <nav id="menu">
                    <a href="index.php" class="navig">Главная</a>
                    <a href="contacts.php" class="navig">Контакты</a>
                    <a href="services.php" class="navig">О Нас</a>
                    <a href="projects.php" class="navig">Проекты</a>
                    <a href="personal.php" class="navig">Персонал студии</a>
                    <a href="info.php" class="navig">Подробнее</a>
                </nav>
            </div>
            <div class="other_info">
                <button class="send_request_button">Оставить заявку</button>
            </div>
        </div>
        <div class="image_logo_header2">
            <img src="images/374083-nature-landscape-trees-digital_art-fantasy_art-mountains-bridge-house-mist-forest-pine_trees-waterfall-wood.jpg"
                alt="">
        </div>
    </div>


    <div class="main_activity" style="background: white;">
        <p><strong>Почему именно мы?</strong></p>
        <hr class="hrr" style="margin-bottom: 1vw;">
    </div>
    <div class="advanced">
        <div class="fullprocedure">
            <img src="images/construction_project_plan_building_architect_design_develop-80_icon-icons.com_60245.png"
                alt="">
            <div class="text_info">
                <p><b>Полный процесс</b></p>
                <p class="textt">согласование проекта<br>
                    с заказчиком</p>
            </div>
        </div>
        <div class="ourrate">
            <img src="images/key.png" alt="">
            <div class="text_info">
                <p><b>Полная доверенность</b></p>
                <p class="textt">разработка проектов<br>
                    с 2004 года</p>
            </div>
        </div>
        <div class="natural">
            <img src="images/money.png" alt="">
            <div class="text_info">
                <p><b>Приемлимая стоимость</b></p>
                <p class="textt">доступные технологии<br>
                    по удобным ценам</p>
            </div>
        </div>
        <div class="deliver">
            <img src="images/time.png" alt="">
            <div class="text_info">
                <p><b>Экономия времени</b></p>
                <p class="textt">мы ценим не только своё<br>
                    но и ваше время</p>
            </div>
        </div>
    </div>
    <div class="main_activity">
        <p><strong>Основная деятельность</strong></p>
        <hr class="hrr">


        <div class="grid">
            <div class="activities_plants">
                <p><b>Разработка</b></p>
            </div>
            <div class="activities_animals">
                <p><b>Поддержка</b></p>
            </div>
            <div class="activities_birds">
                <p><b>Сотрудничество</b></p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_logo">
            <img src="images/Logo.png" alt="">
            <p>Студия проектов "Вавилон"</p>
            <a>г.Минск пр. Победителей 23к1 офис 15</a>
        </div>
        <div class="footer_nav">
            <nav>
                <a href="index.php">О студии</a>
                <a href="projects.php">Проекты</a>
                <a href="contacts.php">Партнёрам</a>
            </nav>
        </div>
        <div class="footer_nav">
            <nav>
                <a href="index.php">Главная</a>
                <a href="contacts.php">Контакты</a>
                <a href="index.php">Подробнее</a>
                <a href="services.php">О Нас</a>
                <a href="">Центр поддержки</a>
                <a href="addinfo.php">Редактирование информации</a>
            </nav>
        </div>
        <div class="little_contacts">
            <a href=""><b>Контакты</b></a>
            <a href=""><b>+375 (44) 710-03-12</b></a>
            <p>vavilonprojects@gmail.com</p>
        </div>
    </div>
    <div class="footer_sec">
        <div class="foo_text">
            <p> ©Студия проектов "Вавилон"</p>
        </div>
        <div class="logtypes">
            <img class="logos__img" src="images/facebook.png">
            <img class="logos__img" src="images/insta.png" alt="">
            <img class="logos__img" src="images/vk.png" alt="">
        </div>
        <div class="adv_inf">
            <p>Только в кратчайшие сроки</p>
        </div>
        <div class="yak">
            <a href="#menu"><img src="images/arrow%20up.png" alt=""></a>
        </div>
    </div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("a[href^='#menu']").click(function () {
            var _href = $(this).attr("href");
            $("html").animate({
                scrollTop: $(_href).offset().top + "px"
            });
            return false;
        });
    });
</script>

</html>