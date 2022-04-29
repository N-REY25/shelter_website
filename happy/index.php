<?php
    // Подключение к БД
    require '../orm/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Счастливые истории</title>
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
                    <h2 class="w_h2">Счастливые истории</h2>
                </div>
            </div>
        </section>
        <section class="happy_section">
            <div class="wrapper">
                <div class="happy">
                    <h3>Собаки и кошки, которых уже взяли из приюта</h3>
                    <div class="h_items">
                        <!-- AJAX ответ -->
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
            $.ajax({
                url: '/api/',
                method: 'get',
                dataType: 'json',
                data: {query: 'happy'},
                success: function(data) {
                    $('.h_items').empty();
                    let i = 0;
                    while (i < data['zoo'].length) {
                        $('.h_items').append('<div class="h_item"><img class="hi_img" src="/img/zoo/' + data["zoo"][i]["photo"] + '"><h4 class="hi_h4">' + data["zoo"][i]["name"] + '</h4><p class="hi_age">' + data["zoo"][i]["pole"] + '</p><p class="hi_kom">' + data["zoo"][i]["komm"] + '</p></div>');
                        i++;
                    }
                }
            });

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