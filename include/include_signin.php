<?php

// вход
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect_user, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");


if (mysqli_num_rows($check_user) > 0){

    $user = mysqli_fetch_assoc($check_user);

$_SESSION['user'] = [
        "id" => $user['id'],
       "nick" => $user['nick'],
       "email" => $user['email']
    ];
    header('Location: ../index/index.php');
    }
else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../signin/signin.php');
}?>

