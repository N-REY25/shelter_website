<?php
    // Подключение к БД
    require '../orm/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Взять собаку из приюта</title>
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
                    <h2 class="w_h2">Взять собаку</br>из приюта</h2>
                </div>
            </div>
        </section>
        <section class="dog_section">
            <div class="wrapper">
                <div class="dog_s">
                    <p class="dog_s_p">ВОЗЬМИ СОБАКУ ИЗ ПРИЮТА, НЕ ПОКУПАЙ!</p>
                    <div class="dog_s_img">
                        <img class="dog_si_img" src="../img/image3.png">
                    </div>
                    <p>Очень разные – веселые и спокойные, робкие и любознательные, пушистые и гладкие, мальчики и девочки, всех возможных окрасов. Все они мечтают о настоящем доме и любящем хозяине. Если вы ищете себе друга - свяжитесь с нами, или обращайтесь напрямую к волонтеру собаки, понравившейся вам в каталоге. В ваших руках сделать самой счастливой на свете одну собаку, которая очень этого ждет. Может быть, этой собаке прямо сейчас снится, как именно вы гладите ее по голове.</br></br>Еще не все москвичи знают о том, что вполне реально и очень просто взять собаку из приюта в Москве.</p></br></br>
                    <h3>"Возьми собаку из приюта, не покупай!" - этот девиз звучит во всем мире на разных языках. И все больше людей принимают это доброе и правильное решение.</h3></br></br>
                    <p>В приюте Любимчик живет около 2500 собак. Очень разные – веселые и спокойные, робкие и любознательные, пушистые и гладкие, мальчики и девочки, всех возможных окрасов. Все они мечтают о настоящем доме и любящем хозяине. Если вы ищете себе друга - свяжитесь с нами, или обращайтесь напрямую к волонтеру собаки, понравившейся вам в каталоге. В ваших руках сделать самой счастливой на свете одну собаку, которая очень этого ждет. Может быть, этой собаке прямо сейчас снится, как именно вы гладите ее по голове.</br></br>Обратившись в приют, вы получите собаку бесплатно, единственное условие – это обеспечить ей достойный уход и, конечно, любить. Все собаки из приюта стерилизованы, привиты от бешенства и, как правило, полностью здоровы. Мы с радостью расскажем вам, как собаки из приюта адаптируются к домашней жизни, и поможем определиться с выбором. У нас есть собаки любого характера и практически любого экстерьера. Волонтер, который опекал питомца в приюте, всегда будет на связи с новыми хозяевами, чтобы помочь советом и делом.</p>
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