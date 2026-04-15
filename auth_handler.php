<?php
session_start();
require_once 'db_connect.php';
// Регистрация
if(isset($_POST['register_form'])) {
    // Экранирование данных для безопасности
    $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
    $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
    $patronymic = mysqli_real_escape_string($link, $_POST['patronymic']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $login = mysqli_real_escape_string($link, $_POST['login']);
    // Хеширование пароля
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // Проверка, существует ли уже такой логин в базе данных
    $check = mysqli_query($link, "SELECT id FROM users_kurs WHERE login = '$login'");
    if(mysqli_num_rows($check) > 0) {
        echo "login_exists"; // Логин занят
        exit();
    }
    // Сохранение нового пользователя в базу данных
    $query = "INSERT INTO users_kurs (last_name, first_name, patronymic, phone, login, password) 
              VALUES ('$last_name', '$first_name', '$patronymic', '$phone', '$login', '$password')";
    if(mysqli_query($link, $query)) {
        $_SESSION['user_id'] = mysqli_insert_id($link);
        $_SESSION['user_login'] = $login;
        echo "success";
    } else {
        echo "error";
    }
    exit();
}

// вход
if(isset($_POST['login'])) {
    $login = mysqli_real_escape_string($link, $_POST['login']);
    $password = $_POST['password'];
    
    $result = mysqli_query($link, "SELECT * FROM users_kurs WHERE login = '$login'");
    if($user = mysqli_fetch_assoc($result)) {
        if(password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_login'] = $user['login'];
            echo "success";
        } else {
            echo "wrong_password";
        }
    } else {
        echo "user_not_found";
    }
    exit();
}

// выход
if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// проверка статуса
if(isset($_GET['check'])) {
    if(isset($_SESSION['user_login'])) {
        echo $_SESSION['user_login'];
    } else {
        echo "not_logged";
    }
    exit();
}
?>