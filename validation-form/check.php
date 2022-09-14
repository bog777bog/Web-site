<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login)<5 || mb_strlen($login) > 90){
        echo "The long of login is not available";
        exit();
    } else if(mb_strlen($name)<3 || mb_strlen($name) > 50){
        echo "The long of name is not available";
        exit();
    }  else if(mb_strlen($pass)<2 || mb_strlen($pass) > 6){
        echo "The long of pass is not available";
        exit();
    } 

$pass = md5($pass."hjkiuwni74652");


    $mysql = new mysqli ('localhost','root','root','register-bd');
    $mysql->query("INSERT INTO `users` (`login`,`name`,`pass`)
    VALUES('$login','$name','$pass')");
    $mysql->close();

    header('Location: /');
    exit();
?>