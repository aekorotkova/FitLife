<?php
session_start();
require_once 'db_connect.php';

if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users_kurs WHERE id = $user_id"));
$bookings = mysqli_query($link, "SELECT * FROM bookings_kurs WHERE user_id = $user_id ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – Личный кабинет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Вход в личный кабинет фитнес клуба. 
    Просмотр посещений, покупка абонементов и управление услугами онлайн.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">FitLife</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="club.php" data-toggle="dropdown">О клубе</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="club.php#about">Больше о нас</a></li>
                            <li><a class="dropdown-item" href="club.php#values">Ценности</a></li>
                            <li><a class="dropdown-item" href="club.php#spaces">Помещения и оборудование</a></li>
                            <li><a class="dropdown-item" href="club.php#team">Команда</a></li>
                            <li><a class="dropdown-item" href="club.php#faq">Частые вопросы</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.php" data-toggle="dropdown">Услуги</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="services.php#memberships">Абонементы</a></li>
                            <li><a class="dropdown-item" href="services.php#programs">Программы</a></li>
                            <li><a class="dropdown-item" href="services.php#offers">Специальные предложения</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="coaches.php">Тренеры</a></li>
                    <li class="nav-item"><a class="nav-link" href="schedule.php">Расписание</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li>
                    <li class="nav-item"><a class="btn btn-outline-purple btn-sm" href="auth_handler.php?logout=1">Выйти</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-hero">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Личный кабинет</h1>
            <p class="lead">Добро пожаловать, <?= $user['first_name'] . ' ' . $user['last_name'] ?>!</p>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Карточка "Мои данные" (без hover) -->
                <div class="col-md-4 mb-4">
                    <div class="card profile-card">
                        <div class="card-body">
                            <h4 class="card-title">Мои данные</h4>
                            <hr>
                            <p><strong>ФИО:</strong> <?= $user['last_name'] . ' ' . $user['first_name'] . ' ' . ($user['patronymic'] ?? '') ?></p>
                            <p><strong>Телефон:</strong> <?= $user['phone'] ?></p>
                            <p><strong>Логин:</strong> <?= $user['login'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- Карточка "Мои записи" (без hover) -->
                <div class="col-md-8 mb-4">
                    <div class="card profile-card">
                        <div class="card-body">
                            <h4 class="card-title">Мои записи</h4>
                            <hr>
                            <?php if(mysqli_num_rows($bookings) > 0): ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead><tr><th>Занятие</th><th>Тренер</th><th>Время</th><th>Статус</th></tr></thead>
                                        <tbody>
                                            <?php while($b = mysqli_fetch_assoc($bookings)): ?>
                                            <tr>
                                                <td><?= $b['lesson'] ?></td>
                                                <td><?= $b['trainer'] ?></td>
                                                <td><?= $b['lesson_time'] ?></td>
                                                <td>
                                                    <?php if($b['status'] == 'В ожидании'): ?>
                                                        <span class="badge badge-warning">В обработке</span>
                                                    <?php elseif($b['status'] == 'Одобрена'): ?>
                                                        <span class="badge badge-success">Подтверждена</span>
                                                    <?php elseif($b['status'] == 'Отказано'): ?>
                                                        <span class="badge badge-danger">Отклонена</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-secondary"><?= $b['status'] ?></span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else: ?>
                                <p class="text-muted text-center">У вас пока нет записей</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h4 class="text-white font-weight-bold">FitLife</h4>
                    <p class="small">Твой фитнес. Твой результат. Твоя жизнь. Присоединяйся к нам сегодня!</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white">Меню</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-muted small">Главная</a></li>
                        <li><a href="club.php" class="text-muted small">О клубе</a></li>
                        <li><a href="services.php" class="text-muted small">Услуги</a></li>
                        <li><a href="coaches.php" class="text-muted small">Тренеры</a></li>
                        <li><a href="schedule.php" class="text-muted small">Расписание</a></li>
                        <li><a href="contacts.php" class="text-muted small">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white">Контакты</h5>
                    <ul class="list-unstyled small">
                        <li>📍 ул. Спортивная, д. 10</li>
                        <li>📞 +7 (999) 000-00-00</li>
                        <li>✉️ info@fitlife.ru</li>
                        <li>⏰ Пн-Вс: 07:00 — 23:00</li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white">Социальные сети</h5>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="mr-3">
                            <img src="img/max.png" alt="MAX" class="social-icon-img">
                        </a>
                        <a href="javascript:void(0)" class="mr-3">
                            <img src="img/vk.png" alt="ВКонтакте" class="social-icon-img">
                        </a>
                        <a href="javascript:void(0)">
                            <img src="img/rutube.png" alt="RUTUBE" class="social-icon-img">
                        </a>
                    </div>
                </div>
            </div>
            <hr class="footer-hr">
            <div class="text-center pb-3">
                <small>© 2026 FitLife. Все права защищены. | Политика конфиденциальности</small>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <?php include 'auth_modal.php'; ?>
</body>
</html>