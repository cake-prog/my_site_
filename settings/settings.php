<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настройки</title>
    <link rel="stylesheet" href="style_settings.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/logo/лого1_negate.png">
</head>

<body>
    <div class="main_content">
        <div class="left_sidebar">
            <p class="ikons_settings">Настройки</p>
            <a href="../signin/signin.php"><p class="ikons_beg">Выйти</p></a>
           
        </div>
        <div class="settings">
            <ul>
                <li class="password">
                    <div class="main_password">
                        <p>Сменить пароль</p>
                        <form class="password_form">

                            <div class="old_password">
                                <input type="text" name="text" class="search" placeholder="Старый пароль">
                                <input type="submit" name="submit" class="submit" value="Ввести">
                            </div>
                            <div class="new_password">
                                <input type="text" name="text" class="search" placeholder="Новый пароль">
                                <input type="submit" name="submit" class="submit" value="Ввести">
                            </div>
                            <div class="return_new_password">
                                <input type="text" name="text" class="search" placeholder="Повторите новый пароль">
                                <input type="submit" name="submit" class="submit" value="Ввести">
                            </div>

                        </form>
                    </div>
                </li>
                <li class="email">
                    <div class="main_email">
                        <p>Сменить пароль</p>
                        <form class="email_form">

                            <div class="new_email">
                                <input type="text" name="text" class="search" placeholder="Новый email">
                                <input type="submit" name="submit" class="submit" value="Ввести">
                            </div>
                            <div class="cod">
                                <input type="text" name="text" class="search" placeholder="Код отправленный на новый email">
                                <input type="submit" name="submit" class="submit" value="Ввести">
                            </div>
                           

                        </form>
                    </div>
                </li>
                <li class="tema">
                    <div class="smen_tema"> 
                        <p>Сменить тему</p>
                        <select name="" id="option_smen_tema">
                            <option value="">Светлая тема</option>
                            <option value="">Темная тема</option>
                        </select>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</body>

</html>