<?php
    // Подключение к БД
    require '../orm/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Контакты</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="header">
                    <div class="h_logo">
                        <img class="hl_img" src="../img/logo.svg" alt="logo">
                        <h1 class="hl_h1">Любимчик</h1>
                    </div>
                    <nav class="h_menu">
                        <a class="hm_a" href="/">Главная</a>
                        <a class="hm_a" href="/catalog_dog" onmouseover="dog_on()" onmouseout="dog_off()">Собаки</a>
                        <a class="hm_a" href="/catalog_cat" onmouseover="cat_on()" onmouseout="cat_off()">Кошки</a>
                        <a class="hm_a" href="/happy">Нашли дом</a>
                        <a class="hm_a" href="/o_nas" onmouseover="info_on()" onmouseout="info_off()">О нас</a>
                        <?php if (!isset($_SESSION['user'])) : ?>
                            <a class="hm_button" href="/admin">Регистрация/Вход</a>
                        <?php else : ?>
                            <a class="hm_button" href="/admin">Личный кабинет</a>
                            <a class="hm_button" href="/admin?logout">Выход</a>
                        <?php endif ?>
                        <div class="hm_podmenu dog" onmouseover="dog_on()" onmouseout="dog_off()">
                            <a class="hmp_a" href="/vzat_dog">Взять собаку</a>
                            <a class="hmp_a" href="/catalog_dog">Каталог собак</a>
                        </div>
                        <div class="hm_podmenu cat" onmouseover="cat_on()" onmouseout="cat_off()">
                            <a class="hmp_a" href="/vzat_cat">Взять кошку</a>
                            <a class="hmp_a" href="/catalog_cat">Каталог кошек</a>
                        </div>
                        <div class="hm_podmenu info" onmouseover="info_on()" onmouseout="info_off()">
                            <a class="hmp_a" href="/volonter">Стать волонтером</a>
                            <a class="hmp_a" href="/contacts">Контакты</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <section class="welcome_section">
            <img class="ws_img" src="../img/welcome.png">
            <div class="wrapper">
                <div class="welcome">
                    <h2 class="w_h2">Контакты</h2>
                </div>
            </div>
        </section>
        <section class="contacts_section">
            <div class="wrapper">
                <div class="contacts">
                    <p>Если вы выбрали питомца на нашем сайте, то вы можете заполнить заявку, расположенной ниже или отправить письмо на почтовый ящик sobaka@izpriuta.ru. Опишите критерии, по которым вы выбираете, и мы обязательно вам ответим и договоримся о времени визита в приют, где покажем вам подходящих питомцев.</br></br>Мы - сообщество волонтеров и находимся в приюте нерегулярно. Поэтому просим вас планировать ваш визит заранее и приезжать только договорившись о встрече по почте или телефону.</br></br>Обращаем ваше внимание, что, к сожалению, волонтеры не могут принять животное в приют! Приют Любимчик - муниципальный и принимает животных только от городских служб.</p>
                    <div class="c_info">
                        <div class="ci_form">
                            <input class="cf_input" type="text" placeholder="Тема">
                            <input class="cf_input" type="text" placeholder="Имя">
                            <input class="cf_input" type="text" placeholder="Телефон">
                            <input class="cf_input" type="text" placeholder="E-mail">
                            <textarea class="cf_textarea" placeholder="Комментарий"></textarea>
                            <button class="cf_button">Отправить</button>
                        </div>
                        <div class="ci_map">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6bdfe1cdf6ceaffd4ec39248d2c08df90f65d6b842bc14c8cd4c8689ad07ef66&amp;source=constructor" width="100%" height="100%" frameborder="0" style="border-radius: 5px;"></iframe>
                        </div>
                    </div>
                    <div class="c_cont">
                        <h3>Подробная контактная информация:</h3></br>
                        <p>Приют находится в г. Пенза, ТЦ Проспект.</p>
                        <p>E-mail: sobaka@izpriuta.ru</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="wrapper">
                <div class="footer">
                    <div class="f_info">
                        <div class="fi_menu">
                            <h3 class="fi_h3">Популярные ссылки:</h3>
                            <a class="fi_a" href="/">Главная</a>
                            <a class="fi_a" href="/catalog_dog">Каталог собак</a>
                            <a class="fi_a" href="/catalog_cat">Каталог кошек</a>
                            <a class="fi_a" href="/happy">Нашли дом</a>
                            <a class="fi_a" href="/contacts">Контакты</a>
                        </div>
                        <div class="fi_soc">
                            <h3 class="fi_h3">Мы в социальных сетях:</h3>
                            <a class="fi_a" href="https://vk.com/"><i class="fa fa-vk" aria-hidden="true"></i> Вконтакте</a>
                            <a class="fi_a" href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatApp</a></br>
                            <a class="fi_a" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Написать нам</a>
                        </div>
                    </div>
                    <p class="f_p">© 2022 Любимчик. Все права защищены.</p>
                </div>
            </div>
        </footer>
        <script>
            function dog_on() {
                $('.dog').addClass('hmp_dog');
            }
            function dog_off() {
                $('.dog').removeClass('hmp_dog');
            }
            function cat_on() {
                $('.cat').addClass('hmp_cat');
            }
            function cat_off() {
                $('.cat').removeClass('hmp_cat');
            }
            function info_on() {
                $('.info').addClass('hmp_info');
            }
            function info_off() {
                $('.info').removeClass('hmp_info');
            }
        </script>
    </body>
</html>