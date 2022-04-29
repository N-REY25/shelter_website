<?php
    //Проверка на авторизацию
    if (!isset($_SESSION['user'])) {
        header('Location: /admin');
    }
?>
<!DOCTYPE html>
<html lang="ru" style="height: 100%;">
    <head>
        <meta charset="UTF-8">
        <title>Личный кабинет</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
    </head>
    <body style="height: 100%;">
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
                        <a class="hm_button" href="/admin?logout">Выход</a>
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
        <section class="lk_section">
            <div class="wrapper">
                <div class="lk">
                    <img class="lk_img" src="../img/6mz.gif" alt="">
                    <h1>Добро пожаловать в личный кабинет!</h1></br></br>
                    <p>
                        <b>Вот что нам известно о вас:</b></br></br>
                        <b>Имя:</b> <?php echo $_SESSION['user']->name ?></br></br>
                        <b>Фамилия:</b> <?php echo $_SESSION['user']->surname ?></br></br>
                        <b>E-mail для связи:</b> <?php echo $_SESSION['user']->email ?>
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>