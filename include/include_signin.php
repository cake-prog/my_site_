<?php

// вход
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = md5($_POST['password']);


$from = "FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

$count = $pdo->query("SELECT count(*) $from")->fetchColumn();
$string = $pdo->query("SELECT * $from");

if ($count > 0){
     
    $user = $string->fetch(PDO::FETCH_ASSOC);
    echo $user;
    setcookie("id", $user['id'], strtotime("+30 days"), '/');
    setcookie("nick", $user['nick'], strtotime("+30 days"), '/');
    setcookie("email", $user['email'], strtotime("+30 days"), '/');
    setcookie("main_foto", $user['main_foto'], strtotime("+30 days"), '/');
    setcookie("city", $user['city'], strtotime("+30 days"), '/');

/*
$_SESSION['users'] = [
        "id" => $user['id'],
       "nick" => $user['nick'],
       "email" => $user['email'],
       "main_foto" => $user['main_foto'],
       "city" => $user['city']
    ];*/
    header('Location: ../index/index.php');
   }
else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../signin/signin.php');
}?>

