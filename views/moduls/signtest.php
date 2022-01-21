<?php
    session_start();
    require_once 'db.php';
    $user =  $_POST['username'];
    $password = $_POST['password'];

    if (check($user, $password, 'users')){
        $_SESSION['username'] = $user;
        echo 1;
    } else{
        echo 0;
    }