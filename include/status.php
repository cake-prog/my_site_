<?php

// загрузка города в табл.
session_start();
require_once 'connect.php';



if(empty($_COOKIE['status'])){

    $status = $_POST['status'];
    $user_id = $_COOKIE['id'];
    echo $status;
    $sqli = "UPDATE `users` SET `status` = '$status' where `id` = '$user_id'"; 
     $affecte = $pdo->exec($sql);
     $_COOKIE["status"] = $status;

     header('Location: ../index/index.php');
} else{
    $_COOKIE['status'] = $_POST['status'];
    header('Location: ../index/index.php');
}