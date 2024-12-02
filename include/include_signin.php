<?php

// вход
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = md5($_POST['password']);


$from = "FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

$count = $pdo->query("SELECT count(*) $from")->fetchColumn();
$string = $pdo->query("SELECT * $from");

if ($count > 0){
     
    $user = $string->fetch(PDO::FETCH_ASSOC);
    echo $user;

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

