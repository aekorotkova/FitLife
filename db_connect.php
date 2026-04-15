<?php
$host = 'localhost';
$database = 'fitlife_kurs';
$user = 'root';
$password = '';

$link = mysqli_connect($host, $user, $password, $database) 
or die("Ошибка подключения к БД: " . mysqli_connect_error());
mysqli_set_charset($link, "utf8mb4");
?>