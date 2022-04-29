<?php
    // Подключение к БД
    require '../orm/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Стать волонтером</title>
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
                    <h2 class="w_h2">Стать</br>волонтером</h2>
                </div>
            </div>
        </section>
        <section class="volonter_section">
            <div class="wrapper">
                <div class="volonter">
                    <p class="v_p">Как стать волонтером прияюта. Виды помощи собакам и кошкам в приюте - от прогулок, до нахождения дома.</p>
                    <div class="v_img">
                        <img class="vi_img" src="../img/image.png">
                    </div>
                    <p>В приюте Любимчик живет около 2500 собак и им всем необходимо человеческое внимание. Поэтому нам всегда нужны новые волонтеры. Если у вас есть желание помогать животным приюта, свободное время и вам уже исполнилось 16 лет, то мы вас очень ждем.</p></br></br>
                    <h3>Чем же занимается волонтер приюта и как он может помочь собакам?</h3></br></br>
                    <p>Волонтеры - добровольные помощники, которые регулярно (обычно 1-2 раза в неделю) приходят в приют к своим подопечным. Основная задача волонтера - общаться и гулять с собаками. У многих животных трудная судьба, и нужно время и терпение, чтобы вернуть им доверие к человеку и подарить радость общения.</br></br>Мы всегда рады новым людям, все расскажем и научим, и у вас будут свои подопечные, которые будут ждать именно вас. Кроме того, что такая помощь неоценима по своей важности для животных, в качестве приятного бонуса вы получите ни с чем несравнимую эмоциональную обратную связь от питомцев и это так приятно и здорово - гулять с собакой в выходной. Ну а самая главная миссия волонтера - это подготовить своих подопечных к пристройству в семью и в результате найти для них любящих хозяев. Если вы не располагаете свободным временем регулярно, но хотите помогать - это тоже очень важно. Всегда нужны фотографы для съемки собак, помощники в ремонтных работах и те, кто готов пообщаться с теми собаками, у которых пока нет постоянного опекуна. И даже если вы совсем не можете посещать приют, но судьба питомцев вам небезразлична - вы тоже можете помочь, размещая информацию о нас или об отдельном ищущем дом животном по всем доступным каналам. Просто свяжитесь с нами, если хотите помогать, и, по возможности, приходите, чтобы увидеть все своими глазами.</p>
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
                            <a class="fi_a" href="#">Каталог собак</a>
                            <a class="fi_a" href="#">Каталог кошек</a>
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