<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext"
        rel="stylesheet">
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
            <div class="content_serv1">
                <div class="cont_text1">
                    <h1><b>Контакты</b></h1>
                    <p style="margin: 0;">Формы связи со студией</p s>
                </div>
            </div>
            <div class="content_contacts">
                <div class="map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad4f4a855af9e706e852b8470888fa1a86962115ffb0a9b296d362cc2a079e083&amp;source=constructor"
                        width="800" height="636" frameborder="0"></iframe>
                </div>
                <div class="main_contacts">

                    <div class="forms">
                        <div class="selects">
                            <p><b>Форма обращения в Студию</b></p>
                            <label for="who">Вы:</label>
                            <label for="with">С кем хотите связаться?</label>
                            <br>
                            <select id="who">
                                <option value="seller" rel="">Юридическое лицо</option>
                                <option value="buyer" rel="">Физичическое лицо</option>
                            </select>
                            <select id="who">
                                <option value="seller" rel="">Отдел продаж</option>
                                <option value="buyer" rel="">Отдел покупок</option>
                                <option value="buyer" rel="">Администрация</option>
                                <option value="buyer" rel="">Генеральный директор</option>
                                <option value="buyer" rel="">Отдел кадров</option>
                                <option value="buyer" rel="">Маркетинговый отдел</option>
                            </select>
                        </div>
                        <div class="inputs">
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Телефон">

                            <div class="messageto">
                                <input type="text" placeholder="Сообщение">
                            </div>
                            <div class="confirm">
                                <button class="send_request_button">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_face">
        <div class="contacts_item">
            <p><b>Главный директор</b></p>
            <a href="">Вайда Артём Викторович</a>
            <a href="">+375 25 777-46-33</a>
            <text>vaid_ar@gmail.com</text>
        </div>
        <div class="contacts_item">
            <p><b>Заместитель директора</b></p>
            <a href="">Девочко Никита Сергеевич</a>
            <a href="">+375 44 876-45-77</a>
            <text>nikita_devochko@gmail.com</text>
        </div>
        <div class="contacts_item">
            <p><b>Главный бухгалтер</b></p>
            <a href="">Авсиевич Евгений Валерьевич</a>
            <a href="">+375 29 678-23-45</a>
            <text>eugene_here21@gmail.com</text>
        </div>
        <div class="contacts_item">
            <p><b>Team Lead</b></p>
            <a href="">Пракопенко Ян Сергеевич</a>
            <a href="">+375 25 659-10-90</a>
            <text>prakopenko900@gmail.com</text>
        </div>
        <div class="contacts_item">
            <p><b>Менеджер по финансам</b></p>
            <a href="">Андронов Даниил Станиславович</a>
            <a href="">+375 29 931-31-45</a>
            <text>dron_daniil@gmail.com</text>
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