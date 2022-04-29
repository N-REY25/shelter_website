<?php
    require '../orm/db.php';

    if ($_GET['query'] == 'happy') {
        $zoo = R::findAll('happy', 'ORDER BY id DESC LIMIT 4');
        $zoo_arr = array();
        foreach ($zoo as $z) {
            array_push($zoo_arr, ['id'=>$z['id'], 'name'=>$z['name'], 'pole'=>$z['pole'], 'komm'=>$z['komm'], 'photo'=>$z['photo']]);
        }
        $arr = ['status'=>'ok', 'zoo'=>$zoo_arr];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'catalog') {
        if ($_GET['filter'] == "cat") {
            $cats = R::findAll('catalog', 'WHERE zoo = "cat" ORDER BY id DESC LIMIT 4');
            $cat_arr = array();
            foreach ($cats as $c) {
                array_push($cat_arr, ['id'=>$c['id'], 'name'=>$c['name'], 'pole'=>$c['pole'], 'age'=>$c['age'], 'komm'=>$c['komm'], 'photo'=>$c['photo']]);
            }
            $arr = ['status'=>'ok', 'zoo'=>$cat_arr];
            $json = json_encode($arr);
            echo $json;
        } elseif ($_GET['filter'] == "dog") {
            $dogs = R::findAll('catalog', 'WHERE zoo = "dog" ORDER BY id DESC LIMIT 4');
            $dog_arr = array();
            foreach ($dogs as $d) {
                array_push($dog_arr, ['id'=>$d['id'], 'name'=>$d['name'], 'pole'=>$d['pole'], 'age'=>$d['age'], 'komm'=>$d['komm'], 'photo'=>$d['photo']]);
            }
            $arr = ['status'=>'ok', 'zoo'=>$dog_arr];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_POST['query'] == 'login') {
        $user = R::findOne('users', 'WHERE `email` = "'.$_POST['login'].'" OR `phone` = "'.$_POST['login'].'"');
        if ($user) {
            if (md5($_POST['pass']) == $user->password) {
                $_SESSION['user'] = $user;
                $arr = ['status'=>'successful'];
                $json = json_encode($arr);
                echo $json;
            } else {
                $arr = ['status'=>'error', 'message'=>'Неверно введен пароль!'];
                $json = json_encode($arr);
                echo $json;
            }
        } else {
            $arr = ['status'=>'error', 'message'=>'Пользователь не найден!'];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_GET['query'] == 'email') {
        $user = R::findOne('users', 'WHERE `email` = "'.$_GET['email'].'"');
        if ($user) {
            $arr = ['status'=>'ok', 'email'=>true];
            $json = json_encode($arr);
            echo $json;
        } else {
            $arr = ['status'=>'ok', 'email'=>false];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_POST['auch'] == 'reg') {
        $user = R::dispense('users');
        $user->name = $_POST['name'];
        $user->surname = $_POST['surname'];
        $user->photo = '';
        $user->phone = '';
        $user->email = $_POST['email'];
        $user->password = md5($_POST['pass']);
        R::store($user);
        $arr = ['status'=>'successful'];
        $json = json_encode($arr);
        echo $json;
    }