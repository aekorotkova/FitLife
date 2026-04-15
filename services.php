<?php
require_once 'db_connect.php';

$query_memberships = "SELECT * FROM memberships_kurs WHERE type = 'абонемент'";
$memberships_result = mysqli_query($link, $query_memberships);

$query_single = "SELECT * FROM memberships_kurs WHERE type = 'разовое'";
$single_result = mysqli_query($link, $query_single);

$query_offers = "SELECT * FROM memberships_kurs WHERE type = 'спец'";
$offers_result = mysqli_query($link, $query_offers);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – Услуги</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Абонементы на занятия, включая бассейн и групповые программы. Удобное расположение в торговых центрах вашего города.">
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
                    <li class="nav-item" id="authLink"><a href="#" class="nav-link text-purple font-weight-bold" data-toggle="modal" data-target="#authModal">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-hero">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Услуги и абонементы</h1>
            <p class="lead">Выбирай удобный формат и начинай тренировки</p>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div id="memberships" class="text-center mb-5">
                <h2 class="font-weight-bold">Абонементы</h2>
                <p class="text-muted">Все абонементы включают тренажёрный зал и групповые занятия</p>
            </div>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($memberships_result)): ?>
                <div class="col-lg-4 mb-4">
                    <div class="membership-card">
                        <div class="card-content">
                            <h4><?= $row['name'] ?></h4>
                            <div class="membership-price">
                                <?= number_format($row['price'], 0, '', ' ') ?> ₽ <small>/ <?= $row['period'] ?></small>
                            </div>
                            <ul class="membership-features">
                                <?php 
                                $features = explode("\n", $row['features']);
                                foreach($features as $feature): 
                                ?>
                                    <li><?= $feature ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <a href="contacts.php" class="btn btn-outline-purple btn-card">Записаться</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div id="programs" class="text-center mb-5 mt-5 pt-5">
                <h2 class="font-weight-bold">Разовые занятия</h2>
                <p class="text-muted">Попробуй без абонемента</p>
            </div>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($single_result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="membership-card">
                        <div class="card-content">
                            <h5><?= $row['name'] ?></h5>
                            <div class="membership-price membership-price-small">
                                <?= number_format($row['price'], 0, '', ' ') ?> ₽
                            </div>
                            <p class="text-muted small"><?= $row['features'] ?></p>
                        </div>
                        <a href="contacts.php" class="btn btn-outline-purple btn-card btn-sm">Записаться</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div id="offers" class="text-center mb-5 mt-5 pt-5">
                <h2 class="font-weight-bold">Специальные предложения</h2>
                <p class="text-muted">Выгодно для своих</p>
            </div>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($offers_result)): ?>
                <div class="col-md-6 mb-4">
                    <div class="membership-card text-left">
                        <div class="card-content">
                            <h4><?= $row['name'] ?></h4>
                            <p class="text-muted"><?= $row['features'] ?></p>
                            <div class="membership-price membership-price-small">
                                <?= number_format($row['price'], 0, '', ' ') ?> ₽ <small>/ <?= $row['period'] ?></small>
                            </div>
                        </div>
                        <a href="contacts.php" class="btn btn-outline-purple btn-card">Подробнее</a>
                    </div>
                </div>
                <?php endwhile; ?>
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