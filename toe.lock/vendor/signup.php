<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($password) {

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../registration.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registration.php');
    }

?>
