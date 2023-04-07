<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_confirm = md5($_POST['password_confirm']);
    $allFields = false;

    if ($full_name and $login and $email and $password and $password_confirm) $allFields = true;

    if ($allFields) {
        if ($password === $password_confirm) {
            $path = 'uploads/'. time() . $_FILES['image']['name'] ;
            if (!move_uploaded_file($_FILES['image']['tmp_name'], '../'. $path)) {
                $_SESSION['message'] = "Ошибка при загрузке изображения";
                header('Location: ../register.php');
            }
            mysqli_query($connect, "INSERT INTO `signers` (`id`, `full_name`, `login`, `email`, `password`, `image`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
            $_SESSION['message'] = "Регистрация прошла успешно!";
            header('Location: ../index.php');
        }
         else {
            $_SESSION['message'] = "Пароли не совпадают";
            header('Location: ../register.php');
        }
    } else {
        $_SESSION['message'] = "Заполните все поля";
        header('Location: ../register.php');
    }


?>