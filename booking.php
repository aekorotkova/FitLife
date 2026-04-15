<?php
session_start();
require_once 'db_connect.php';
// Проверка, авторизован ли пользователь
if(!isset($_SESSION['user_id'])) {
    echo "Вы не авторизованы";
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id']; // ID текущего пользователя из сессии
    $lesson = mysqli_real_escape_string($link, $_POST['lesson']);
    $trainer = mysqli_real_escape_string($link, $_POST['trainer']);
    $lesson_time = mysqli_real_escape_string($link, $_POST['lesson_time']);
    // Сохранение записи со статусом "В ожидании"
    $query = "INSERT INTO bookings_kurs (user_id, lesson, trainer, lesson_time, status) 
              VALUES ('$user_id', '$lesson', '$trainer', '$lesson_time', 'В ожидании')";
    if(mysqli_query($link, $query)) {
        echo "ok";
    } else {
        echo "error: " . mysqli_error($link);
    }
}
?>