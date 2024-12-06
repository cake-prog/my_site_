<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="icon" type="image/x-icon" href="../img/logo/лого1_negate.png">
    <link rel="stylesheet" href="style_signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/logo/лого1_negate.png">
</head>

<body>
    <div class="header">
        <a href="#"><img class="regist_main_logo" src="../img/logo/лого1.png" alt="logo"></a>
        <div class="regist_icon">
            <a href="../signin/signin.php">
                <p>Вход</p>
            </a>
        </div>
    </div>

    <div class="authorization">
        <div>
            <p class="regist">Регистрация</p>
            <form action="../include/include_signup.php" method="POST">
                <div class="nick">
                    <label class="label_nick">nickname</label>
                    <input type="text" name="nick" class="search" placeholder="">
                 
                </div>
                <div class="email">
                    <label class="label_email">email</label>
                    <input type="text" name="email" class="search" placeholder="">
              
                </div>

                <div class="password">
                    <label class="label_password">password</label>
                    <input type="password" name="password" class="search" placeholder="">
                 
                </div>

                <div class="password_return">
                    <label class="label_password_return">return password</label>
                    <input type="password" name="password_return" class="search" placeholder="">
                   
                </div>
                <button type="submit" class="continue">
                    Зарегистрироваться
                </button>
                
                    <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg"> ' . $_SESSION['message'] . '  </p>';
                    }
                     unset($_SESSION['message']);
                
                     ?>
            </form>
        </div>
    </div>
    </div>
</body>

</html>