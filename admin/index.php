<?php
    // Подключение к БД
    require '../orm/db.php';

    if (isset($_GET['logout'])) {
        unset($_SESSION['user']);
        header('Location: /admin');
    }

    //Отображение страниц
    if (isset($_SESSION['user'])) {
        switch ($_GET['page']) {
            case 'happy': include 'content.php';
            break;
            default: include 'dashboard.php';
        }
    } else {
        include 'login.html';
    }