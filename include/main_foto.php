
<?php
session_start();
require_once 'connect.php';


if(isset($_FILES['main_foto'])){

$main_foto = $_FILES["main_foto"];
$user_id = $_COOKIE['id'];

try {
    $path = 'image/' . $_FILES["main_foto"]["name"];
     move_uploaded_file($_FILES["main_foto"]["tmp_name"], '../' . $path . '.jpeg');
     $sql = "UPDATE `users` SET `main_foto` = '$path' where `id` = '$user_id'"; 
     $affectedRowsNumber = $pdo->exec($sql);
     $_COOKIE["main_foto"] = 'image/' . $_FILES["main_foto"]["name"];
     
     header('Location: ../index/index.php');

    
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}
else{
    echo 'main_foto post not isset';
}




?>