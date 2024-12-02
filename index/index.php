<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/logo/лого1_negate.png">
    
</head>

<body>
    <div class="header">
        <a href="#"><img class="main_logo" src="../img/logo/лого1.png" alt="logo"></a>
        <form class="header_form">
            <input type="text" name="text" class="search" placeholder="Найти...">
            <input type="submit" name="submit" class="submit" value="Поиск">
        </form>
        <img class="noti_logo" src="../img/уведомления.png" alt="notifications">

        <div class="header_user">
            <a href="#" >
                <p><?= $_SESSION['user']['nick']?></p>
            </a>
            <a href="#">
                <img class="user_logo" src="../img/user_picturs/not_foto.png" alt="фото пользователя">
            </a>
        </div>
    </div>
    <div class="content">
        <div class="sidebar_left">
            <ul class="sidebar_left_list">
                <li class="sidebar_num1">Моя страница</li>
                <li class="sidebar_num1">Новости</li>
                <li class="sidebar_num1">Сообщения</li>
                <li class="sidebar_num1">Друзья</li>
                <li class="sidebar_num1">Группы</li>
                <li id="fotografii" class="sidebar_num1">Фотографии</li>
                <a href="../settings/settings.php">
                <div class="sidebar_num_settings">
                    
                    <li>Настройки</li>
                    <img class="settings_logo" src="../img/настройки.png" alt="настройки">
            
                </div>
                </a>

            </ul>
        </div>
        <div class="sidebar">
            <div class="sidebar_right1">
                <div class= 'function_picturs'>



                    <form action="../include/main_foto.php" method= "POST" enctype="multipart/form-data" > 

                    <input type="file" name="main_foto" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                    
                   <!-- <div class='button_download_picturs'><a href="#"><img src="../img/download.jpg" alt=""></a></div> -->
                    

                    </form>
                   


                    <div class='main_pictur'><img class="sidebar_right_img_user" src="../img/user_picturs/not_foto.png" alt="фото пользователя"></div> 

                    

                </div>
                
                <ul class="ul_sidebar_num2">
                    <li class="sidebar_num2">nickname: <?= $_SESSION['user']['nick']?></li>
                    <li class="sidebar_num2">Дата рождения: 25.12.2004</li>
                    <li class="sidebar_num2">Город: Санкт-Петербург</li>
                    <li class="sidebar_num2">email: <?= $_SESSION['user']['email']?></li>
                    <li class="sidebar_num2">Статус: :)</li>
                    <li class="sidebar_num2">Темная: темная</li>
                </ul>
            </div>
            <div class="sidebar_right2">
                <div class="sidebar_right2_num">
                    <ul class="list">
                        <li class="sidebar_num3">
                            <div>Фото</div>
                        </li>
                        <li class="sidebar_num4">
                            <div>Музыка</div>
                        </li>
                        <li class="sidebar_num5">
                            <div>Музыка</div>
                        </li>
                        <li class="sidebar_num6">
                            <div>Группы</div>
                        </li>
                        <li class="sidebar_num7">
                            <div>Друзья</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="picturs">
                <img class="pic1" src="../img/user_picturs/pic1.jpg" alt="">
                <img class="pic2" src="../img/user_picturs/pic2.jpg" alt="">
                <img class="pic3" src="../img/user_picturs/pic3.jpg" alt="">
                <img class="pic4" src="../img/user_picturs/pic4.jpg" alt="">
                <img class="pic5" src="../img/user_picturs/pic5.jpg" alt="">
            </div>
        </div>
    </div>
</body>

</html>