<?php

// регистрация
session_start();
require_once 'connect.php';

$nick = $_POST['nick'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_return = $_POST['password_return'];

$hash = password_hash($password, PASSWORD_DEFAULT);


    if($password === $password_return){

    
        $hash = $_COOKIE['hash_cookie'];
        
        
         $sql = "INSERT INTO `users` (`id`, `nick`, `email`, `password`) VALUES (NULL, '$nick', '$email', '$hash')"; 
          
         $affectedRowsNumber = $pdo->exec($sql);
     
     
         $_SESSION['message'] = 'Регистрация прошла успешно!';
         header('Location: ../signin/signin.php');
     
     }
     else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registration/signup.php');
     }



