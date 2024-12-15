<?php

// загрузка города в табл.
session_start();
require_once 'connect.php';

$user_id = $_COOKIE['id'];

$city = $_POST["city"];


     $sql = "UPDATE `users` SET `city` = '$city' where `id` = '$user_id'";
     $affectedRowsNumber = $pdo->exec($sql);
     $_SESSION["user"]["city"] = $_POST["city"];
     
    
    header('Location: ../index/index.php');