
<!--

<?php

    //session_start();

    //if ($_SESSION['user']) {
    //    header('Location: mainPage.html');
   // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/auth.css">
</head>
<body>
    <form action="vendor/signIn.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>
        <?php
           // if ($_SESSION['message']) {
                //echo '<p class="message">'. $_SESSION['message'] .'</p>';
           // }
            //unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>

-->

<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: mainPage.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/auth.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="content">
        <div class="row_content_auth">
            <div class="form_auth">
                <form action="vendor/signIn.php" method="post">
                    <div class="element_form">
                        <div class="title_element_form">
                            Логин
                        </div>
                        <div class="input_element_form">
                            <input type="text" placeholder="Введите логин" name="login">
                        </div>
                    </div>
                    <div class="element_form">
                        <div class="title_element_form">
                            Пароль
                        </div>
                        <div class="input_element_form">
                            <input type="password" placeholder="Введите пароль" name="password">
                        </div>
                    </div>
                    <button type="submit">Войти</button>
                </form>
            </div>
            <div class="form_quest">
                <div class="text_form_quest">
                    У вас еще нет аккаунта? <a href="register.php">Зарегистрируйтесь</a>!
                </div>
            </div>
            <?php
                if ($_SESSION['message']) {
                    if ($_SESSION['message'] == "Регистрация прошла успешно!") {
                        echo '<div class="form_message_success">
                                <div class="text_form_message_success">
                                    '. $_SESSION['message'] .'
                                </div>
                            </div> ';
                    } else {
                        echo '<div class="form_message">
                                <div class="text_form_message">
                                    '. $_SESSION['message'] .'
                                </div>
                            </div> ';
                    }
                } 
                unset($_SESSION['message']);
            ?>
        </div>
    </div>
</body>
</html>