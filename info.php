<?php
include("include/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Подробнее о студии</title>
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
    <div class="content_serv" style="background: url('images/info.jpg');">
        <div class="cont_text">
            <h1><b>Подробнее</b></h1>
            <p style="margin: 0;">Дополнительная информация</p s>
        </div>
    </div>
    <div class="main_goods">
        <span><strong>Информация о студии</strong></span>
        <hr class="hrr">

        <div class="selected_info">
            <span><strong>Сводка №1: Название проектов, срок которых меньше заданного</strong></span>
            <hr class="hrr">
            <div class="inputs" style="margin-bottom: 1.3vw; display: flex; justify-content: center; ">
                <form action="select1.php" method="POST">
                    <input type="text" placeholder="Количество дней" name="dayss" style="margin: 1vw 1vw;">
                    <button type="submit" class="send_request_button">Результат</button>
                </form>
            </div>
            <div class="selected">
                <?php
                if (isset($_POST['dayss'])) {

                    $day = $_POST['dayss'];

                    $result = mysqli_query($link, "SELECT * FROM projects where project_duration < '$day'");

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_array($result);
                        do {
                            echo '                                               
                            <div class="items" style="background: white;">
                            <p class="category" style="font-size: 1.42vw;">' . $row["project_name"] . '</p>
                            <img src="' . $row["project_photo"] . '" alt="" width="200" height="190">
                            <br>Ответственный за проект<br>
                            <p style="margin-top: 1px;"><b>' . $row["project_bossname"] . '</b></p>
                            <a>Cроки выполнения проекта:  ' . $row["project_duration"] . ' дней(день)</a>
                            </div>';
                        } while ($row = mysqli_fetch_array($result));
                    }
                }
                ?>
            </div>
        </div>
        <div class="selected_info">
            <span><strong>Сводка №2: Информация о проектах, где участвовал введённый сотрудник </strong></span>
            <hr class="hrr">
            <div class="inputs" style="margin-bottom: 1.3vw; display: flex; justify-content: center; ">
                <form action="select2.php" method="POST">
                    <input type="text" placeholder="ФИО Сотрудника" name="FIOName" style="margin: 1vw 1vw;">
                    <button type="submit" class="send_request_button">Результат</button>
                </form>
            </div>
            <div class="selected">
                <?php
                if (isset($_POST['FIOName'])) {
                    $fio = $_POST['FIOName'];

                    $result = mysqli_query($link, "SELECT project_bossname, project_name, project_cost, project_duration, 
                        project_photo from employees inner join task on task.employee_code = employees.employee_id inner join 
                        projects on projects.project_id = task.project_code where employee_name = '$fio'") or die(mysqli_error($link));

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_array($result);
                        do {
                            echo '                                               
                            <div class="items" style="background: white;">
                            <p class="category" style="font-size: 1.42vw;">' . $row["project_name"] . '</p>
                            <img src="' . $row["project_photo"] . '" alt="" width="200" height="190">
                            <br>Ответственный за проект<br>
                            <p style="margin-top: 1px;"><b>' . $row["project_bossname"] . '</b></p>
                               <a>Cроки выполнения проекта:  ' . $row["project_duration"] . ' дней(день)</a>
                            </div>';
                        } while ($row = mysqli_fetch_array($result));
                    }
                }
                ?>
            </div>
        </div>
        <div class="selected_info">
            <span><strong>Сводка №3: Общая стоимость всех проектов </strong></span>
            <hr class="hrr">
            <div class="selected">
                <?php

                $result = mysqli_query($link, "SELECT sum(project_cost) as allSum from projects");

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                        echo '                                               
                        <div class="result" style="background: white;">
                        <p class="category" style="font-size: 1.2vw; text-align: center;">Общая стоимость всех проектов: <br></p>
                        <p style="margin-top: 1px; font-size: 29px;"><b> ' . $row["allSum"] . '$</b></p>
                        </div>';
                    } while ($row = mysqli_fetch_array($result));
                }
                ?>
            </div>
        </div>
        <div class="selected_info">
            <span><strong>Сводка №4: Информация о заданиях с отметкой "не выполнено"</strong></span>
            <hr class="hrr">
            <div class="selected">
                <?php

                $result = mysqli_query($link, "SELECT project_name, task_name, employee_name, task_startDate, task_duration, task_completeMark, employee_photo FROM task inner join employees on task.employee_code = employees.employee_id inner join projects on task.project_code = projects.project_id where task_completeMark = 'не выполнено'");

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                        echo '                                               
                        <div class="result" style="background: white;">
                        <p class="category" style="font-size: 1.2vw; text-align: center;">Задание: <br>' . $row["task_name"] . '</p>
                        <img src="' . $row["employee_photo"] . '" alt="" width="215" height="290">
                        Сотрудник на задании: <br>
                        <p style="margin-top: 1px;"><b>' . $row["employee_name"] . '</b></p>
                        <a>Дата начала выполнения:  ' . $row["task_startDate"] . '</a>
                        <a>Срок выполнения задания:  ' . $row["task_duration"] . ' дней(день)</a>
                        <a>Отметка о выполнении:  <b>' . $row["task_completeMark"] . '</b></a>
                    </div>';
                    } while ($row = mysqli_fetch_array($result));
                }
                ?>
            </div>
        </div>
        <div class="selected_info">
            <span><strong>Сводка №5: Средний оклад сотрудников по отделениям</strong></span>
            <hr class="hrr">
            <div class="selected">
                <?php

                $result = mysqli_query($link, "SELECT round(avg(employee_salary)) as Salary, department_name, department_logo FROM employees inner join departments on employees.department_num = departments.department_id GROUP BY departments.department_name");

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                        echo '                                               
                        <div class="items" style="background: white;">
                        <p class="category" style="font-size: 1.2vw; text-align: center;">Отделение: <br>' . $row["department_name"] . '</p>
                        <img src="images/' . $row["department_logo"] . '" alt="" width="190" height="190">
                        <p style="margin-top: 2px;"><b>Средний оклад сотрудников: ' . $row["Salary"] . '$</b></p>
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
        <link rel="stylesheet" href="style.css">

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("a[href^=' #menu']").click(function() {
            var _href = $(this).attr("href");
            $("html").animate({
                scrollTop: $(_href).offset().top + "px"
            });
            return false;
        });
    });
</script>

</html>