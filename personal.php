<?php
include("include/db_connect.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Персонал студии</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">
</head>

<body>
    <div class="header">
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
        <div class="header2">
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
        </div>
    </div>
    <div class="content_serv3">
        <div class="cont_text3">
            <h1><b>Персонал</b></h1>
            <p style="margin: 0;">Наша команда разработчиков</p s>
        </div>
    </div>
    <div class="main_goods">
        <span><strong>Наша команда</strong></span>
        <hr class="hrr">
        <div class="grid2">
            <?php

            $result = mysqli_query($link, "SELECT employee_name, employee_salary, employee_photo, department_name FROM `employees` inner join departments on employees.department_num = departments.department_id");

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                do {
                    echo '                                               
                    <div class="items" style="background: white; border: 1px dashed #ffb448;">
                        <p class="category" style="font-size: 1.2vw; text-align: center;">' . $row["employee_name"] . '</p>
                        <img src="' . $row["employee_photo"] . '" alt="" width="215" height="290">
                        <p style="margin-top: 1px;">Отдел работы: ' . $row["department_name"] . '</p>
                        <a>Оклад сотрудника:  ' . $row["employee_salary"] . '$</a>
                    </div>';
                } while ($row = mysqli_fetch_array($result));
            }
            ?>
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
    $(function() {
        $("a[href^='#menu']").click(function() {
            var _href = $(this).attr("href");
            $("html").animate({
                scrollTop: $(_href).offset().top + "px"
            });
            return false;
        });
    });
</script>

</html>