<?php

// регистрация
session_start();
require_once 'connect.php';

$nick = $_POST['nick'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_return = $_POST['password_return'];

if($password === $password_return){
    $password = md5($password);

    $sql = "INSERT INTO `users` (`id`, `nick`, `email`, `password`) VALUES (NULL, '$nick', '$email', '$password')"; 
     
    $affectedRowsNumber = $pdo->exec($sql);


    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../signin/signin.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registration/signup.php');
}

if(empty($nick) || empty($email) || empty($password) || empty($password_return)){
    $_SESSION['message']  = 'Заполните все поля!';
    header("Location: ../registration/signup.php");
} else {
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../signin/signin.php');
}

