<?php

$connect = mysqli_connect('localhost', 'root', '', 'Lab2');

if (!$connect) {
    die("Ошибка подключения к базе данных");
}