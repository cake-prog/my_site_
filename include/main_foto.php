
<?php

require_once 'connect.php';


if(isset($_FILES['main_foto'])){

$main_foto = $_FILES["main_foto"];

try {

    $sql = "INSERT INTO `user` (`main_foto`) VALUES ('$main_foto')"; //команда на добавления значения $main_foto в столбец main_foto таблицы main_foto
     
    $affectedRowsNumber = $pdo->exec($sql);
    echo "В таблицу Users добавлено строк: $affectedRowsNumber";

}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}
else{
    echo 'main_foto post not isset';
}




?>