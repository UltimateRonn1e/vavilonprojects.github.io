<?php
include("include/db_connect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Изменение информации</title>
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
            <div class="content_serv1" style="background: #ffb448;">
                <div class="cont_text1">
                    <h1><b>Изменение информации</b></h1>
                    <p style="margin: 0;">Добавление и удаление данных</p s>
                </div>
            </div>
        </div>
    </div>
    <div class="main_goods" style="display: flex; flex-direction: column; align-items: center">
        <span><strong>Добавление/удаление проекта</strong></span>
        <hr class="hrr">
        <div class="general" style="display: flex; flex-direction: row;">

            <div class="inputs" style="margin-right: 7vw">
                <form action="add/addproject.php" method="POST">
                    <input type="text" placeholder="ID" name="project_id">
                    <input type="text" placeholder="Название" name="project_name">
                    <input type="text" placeholder="Имя руководителя" name="project_bossname"><br>
                    <input type="text" placeholder="Цена проекта" name="project_cost">
                    <input type="text" placeholder="Продолжительность проекта" name="project_duration">
                    <div class="messageto">
                        <input type="text" placeholder="Логотип проекта" name="project_logo">
                    </div>
                    <div class="confirm">
                        <button class="send_request_button" name="addproject">Добавить</button>
                </form>
            </div>
        </div>
        <div class="inputs" style="display: flex; align-items: center; flex-direction: column; margin-top: 80px">
            <form action="add/deleteproject.php" method="POST">
                <input type="number" name="delete_project" placeholder="Номер проекта">
                <div class="confirm">
                    <button class="send_request_button">Удалить</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="main_goods" style="display: flex; flex-direction: column; align-items: center">

        <span><strong>Добавление/удаление задания</strong></span>
        <hr class="hrr">

        <div class="general" style="display: flex; flex-direction: row;">

            <div class="inputs" style="margin-right: 7vw">
                <form action="add/addtask.php" method="POST">
                    <input type="text" placeholder="ID" name="task_id">
                    <select id="who" style="cursor: pointer;
                                width: 16vw;
                                height: 4vh;
                                border-radius: 10px 10px 10px 10px;
                                outline: none;
                                font-size: 19px;
                                margin-left: 15px;
                                font-family: 'Cuprum', sans-serif;
                                border: 1px solid gray;" name="projecttask_code">
                        <?php
                        $result = mysqli_query($link, "SELECT project_name FROM projects");

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_array($result);
                            do {
                                echo '                                               
                            <option value="' . $row["project_name"] . '" rel="">' . $row["project_name"] . '</option>';
                            } while ($row = mysqli_fetch_array($result));
                        }
                        ?>
                    </select>
                    <input type="text" placeholder="Название задания" name="task_name"><br>
                    <select id="who" style="cursor: pointer;
                                width: 16vw;
                                height: 4vh;
                                border-radius: 10px 10px 10px 10px;
                                outline: none;
                                font-size: 19px;
                                margin-left: 15px;
                                font-family: 'Cuprum', sans-serif;
                                border: 1px solid gray;" name="employee_code">
                        <?php
                        $result = mysqli_query($link, "SELECT employee_name FROM employees");

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_array($result);
                            do {
                                echo '                                               
                            <option value="' . $row["employee_name"] . '" rel="">' . $row["employee_name"] . '</option>';
                            } while ($row = mysqli_fetch_array($result));
                        }
                        ?>
                    </select>
                    <input type="date" placeholder="Дата начала задания(гггг.мм.дд)" name="task_startDate">
                    <input type="text" placeholder="Продолжительность задания (дней)" name="task_duration"><br>
                    <select id="who" style="cursor: pointer;
                                width: 16vw;
                                height: 4vh;
                                border-radius: 10px 10px 10px 10px;
                                outline: none;
                                font-size: 19px;
                                margin-left: 15px;
                                font-family: 'Cuprum', sans-serif;
                                border: 1px solid gray;" name="task_completeMark">
                        <option value="выполнено" rel="">выполнено</option>
                        <option value="не выполнено" rel="">не выполнено</option>
                    </select>

                    <div class="confirm">
                        <button class="send_request_button">Добавить</button>
                </form>
            </div>
        </div>
        <div class="inputs" style="display: flex; align-items: center; flex-direction: column; margin-top: 80px">
            <form action="add/deletetask.php" method="POST">
                <input type="number" name="delete_task" placeholder="Номер задания">
                <div class="confirm">
                    <button class="send_request_button">Удалить</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="main_goods" style="display: flex; flex-direction: column; align-items: center">

        <span><strong>Добавление/удаление сотрудника</strong></span>
        <hr class="hrr">

        <div class="general" style="display: flex; flex-direction: row;">

            <div class="inputs" style="margin-right: 7vw">
                <form action="add/addemployee.php" method="POST">
                    <input type="text" name="em_id" placeholder="ID">
                    <input type="text" name="em_name" placeholder="ФИО Сотрудника">
                    <input type="text" name="em_salary" placeholder="Оклад сотрудника"><br>
                    <select id="who" style="cursor: pointer;
                                width: 16vw;
                                height: 4vh;
                                border-radius: 10px 10px 10px 10px;
                                outline: none;
                                font-size: 19px;
                                margin-left: 15px;
                                font-family: 'Cuprum', sans-serif;
                                border: 1px solid gray;" name="em_department">
                        <?php
                        $result = mysqli_query($link, "SELECT department_name FROM departments");

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_array($result);
                            do {
                                echo '                                               
                            <option value="' . $row["department_name"] . '" rel="">' . $row["department_name"] . '</option>';
                            } while ($row = mysqli_fetch_array($result));
                        }
                        ?>
                    </select>
                    <div class="messageto" style="margin-top: 1vw;">
                        <input type="text" name="em_photo" placeholder="Фото сотрудника">
                    </div>
                    <div class="confirm">
                        <button type="submit" class="send_request_button">Добавить</button>
                    </div>
                </form>
            </div>
            <div class="inputs" style="display: flex; align-items: center; flex-direction: column; margin-top: 80px">
                <form action="add/deleteemployee.php" method="POST">
                    <input type="text" name="emp_delete" placeholder="Номер сотрудника">
                    <div class="confirm">
                        <button class="send_request_button">Удалить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="main_goods" style="display: flex; flex-direction: column; align-items: center">

        <span><strong>Добавление/удаление отдела</strong></span>
        <hr class="hrr">

        <div class="general" style="display: flex; flex-direction: row;">

            <div class="inputs" style="margin-right: 7vw">
                <form action="add/adddepartment.php" method="POST">
                    <input type="text" name="dep_id" placeholder="ID">
                    <input type="text" name="dep_name" placeholder="Название отдела">
                    <input type="text" name="dep_phone" placeholder="Телефон"><br>
                    <input type="text" name="dep_boss" placeholder="Руководитель отдела">
                    <div class="messageto">
                        <input type="text" name="dep_photo" placeholder="Лого отдела">
                    </div>
                    <div class="confirm">
                        <button class="send_request_button">Добавить</button>
                    </div>
                </form>
            </div>
            <div class="inputs" style="display: flex; align-items: center; flex-direction: column; margin-top: 80px">
                <form action="add/deletedep.php" method="POST">
                    <input type="text" name="delete_dep" placeholder="Номер отдела">
                    <div class="confirm">
                        <button class="send_request_button">Удалить</button>
                    </div>
                </form>
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