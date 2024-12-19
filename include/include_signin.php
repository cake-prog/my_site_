<?php

// вход
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password_vhod = $_POST['password'];


$hash = $_COOKIE['hash'];

if (password_verify($password_vhod, $hash)){

$from = "FROM `users` WHERE `email` = '$email' AND `password` = '$hash'";

$count = $pdo->query("SELECT count(*) $from")->fetchColumn();
$string = $pdo->query("SELECT * $from");

var_dump($string);

if ($count > 0){
     
    $user = $string->fetch(PDO::FETCH_ASSOC);
    echo $user;
    setcookie("id", $user['id'], strtotime("+30 days"), '/');
    setcookie("nick", $user['nick'], strtotime("+30 days"), '/');
    setcookie("email", $user['email'], strtotime("+30 days"), '/');
    setcookie("main_foto", $user['main_foto'], strtotime("+30 days"), '/');
    setcookie("city", $user['city'], strtotime("+30 days"), '/');
    setcookie("status", $user['status'], strtotime("+30 days"), '/');

$_SESSION['users'] = [
       "city" => $user['status']
    ];
    header('Location: ../index/index.php');
   }
}else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../signin/signin.php');
}?>
