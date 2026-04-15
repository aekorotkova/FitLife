<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – Главная</title>
    <meta name="description" content="Фитнес клуб с современным оборудованием, бассейном и 
    опытными профессиональными тренерами. Абонементы на все виды занятий.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 font-weight-bold">FitLife — ваш путь к результату</h1>
                    <p class="lead">Современный фитнес-клуб с научным подходом, бассейном и лучшими тренерами города.</p>
                    <div class="mt-4">
                        <a href="schedule.php" class="btn btn-purple mr-2">Расписание</a>
                        <a href="services.php" class="btn btn-outline-light btn-purple-outline">Программы</a>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-8">
                    <h2 class="font-weight-bold">FitLife — больше чем спорт</h2>
                    <p class="mt-3">Мы создали пространство, где технологии и комфорт работают на ваше здоровье.<br>Наша миссия — помочь каждому найти свой путь к идеальной форме через персональный подход и поддержку сообщества.</p>
                    <a href="club.php" class="btn btn-outline-purple mt-2">Подробнее о нас</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 font-weight-bold">Популярные направления</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card service-card text-center">
                        <img src="img/gym.jpg" class="card-img-top" alt="Зал">
                        <div class="card-body">
                            <div class="card-text-wrapper">
                                <h5>Тренажёрный зал</h5>
                                <p class="small text-muted">Зона свободных весов и новые кардио-тренажеры.</p>
                            </div>
                            <a href="services.php" class="btn-detail">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card text-center">
                        <img src="img/studio.jpg" class="card-img-top" alt="Групповые">
                        <div class="card-body">
                            <div class="card-text-wrapper">
                                <h5>Групповые занятия</h5>
                                <p class="small text-muted">Более 30 видов программ: от йоги до кроссфита.</p>
                            </div>
                            <a href="services.php" class="btn-detail">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card text-center">
                        <img src="img/pool.jpg" class="card-img-top" alt="Бассейн">
                        <div class="card-body">
                            <div class="card-text-wrapper">
                                <h5>Бассейн & SPA</h5>
                                <p class="small text-muted">25-метровый бассейн и зона релаксации.</p>
                            </div>
                            <a href="services.php" class="btn-detail">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="font-weight-bold">Профессиональная команда</h2>
                    <p class="text-muted">Наши наставники помогут вам достичь целей максимально быстро и безопасно.</p>
                    <a href="coaches.php" class="btn btn-purple mb-4">Все тренеры</a>
                </div>
                <div class="col-lg-8">
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <img src="img/anna_sokolova.jpg" alt="Анна" class="coach-img">
                            <h6 class="mb-0">Анна</h6>
                            <small class="text-purple">Фитнес-йога</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="img/maksim_denisov.jpg" alt="Максим" class="coach-img">
                            <h6 class="mb-0">Максим</h6>
                            <small class="text-purple">Силовой тренинг</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="img/elena_krylova.jpg" alt="Елена" class="coach-img">
                            <h6 class="mb-0">Елена</h6>
                            <small class="text-purple">Растяжка</small>
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