<!-- 
<?php
   // session_start();

    //if ($_SESSION['user']) {
    //    header('Location: mainPage.html');
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <form action="vendor/signUp.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое фио">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Изображение</label>
        <input type="file" name="image">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <label>Пдтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Повторите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизуйтесь</a>!
        </p>
        <?php
            //if ($_SESSION['message']) {
           //     echo '<p class="message">'. $_SESSION['message'] .'</p>';
           // }
           // unset($_SESSION['message']);
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
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
<div class="content">
        <div class="row_content_auth">
            <div class="form_auth">
                <form action="vendor/signUp.php" method="post" enctype="multipart/form-data">
                <div class="element_form">
                        <div class="title_element_form">
                            ФИО
                        </div>
                        <div class="input_element_form">
                            <input type="text" placeholder="Введите фио" name="full_name">
                        </div>
                    </div>
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
                            Почта
                        </div>
                        <div class="input_element_form">
                            <input type="text" placeholder="Введите почту" name="email">
                        </div>
                    </div>
                    <div class="element_form">
                        <div class="title_element_form">
                            Заставка
                        </div>
                        <div class="input_element_form">
                            <input type="file" name="image">
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
                    <div class="element_form">
                        <div class="title_element_form">
                            Подтвердите пароль
                        </div>
                        <div class="input_element_form">
                            <input type="password" placeholder="Введите пароль снова" name="password_confirm">
                        </div>
                    </div>
                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
            <div class="form_quest">
                <div class="text_form_quest">
                    У вас уже есть аккаунт? <a href="index.php">Авторизируйтесь!</a>!
                </div>
            </div>

            <?php
                if ($_SESSION['message']) {
                    echo '  <div class="form_message">
                                <div class="text_form_message">
                                    '. $_SESSION['message'] .'
                                </div>
                            </div> ';
                } 
                unset($_SESSION['message']);
            ?>
        </div>
    </div>
</body>
</html>