
<?php
session_start();
require_once 'connect.php';


if(isset($_FILES['main_foto'])){

$main_foto = $_FILES["main_foto"];
$user_id = $_SESSION['user']['id'];

try {
    $path = 'image/' . $_FILES["main_foto"]["name"];
     move_uploaded_file($_FILES["main_foto"]["tmp_name"], '../' . $path . '.jpeg');
     $sql = "UPDATE `user` SET `main_foto` = '$path' where `id` = '$user_id'"; //команда на добавления значения $main_foto в столбец main_foto таблицы main_foto
     
 
     $_SESSION["user"]["main_foto"] = $_FILES["main_foto"]["name"];//обновление session при каждом нажатие кнопки 

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