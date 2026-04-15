<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – О клубе</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Узнайте о нашем официальном фитнес клубе, расположенном в вашем районе. 
    История, миссия и основные достижения клуба за годы работы.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <!-- Выпадающее меню раздела "О клубе" с якорными ссылками -->
                    <li class="nav-item dropdown">
                        <!-- Основная ссылка раздела, открывающая страницу club.php -->
                        <a class="nav-link dropdown-toggle" href="club.php" data-toggle="dropdown">О клубе</a>
                        <!-- Выпадающий список подпунктов -->
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
            <h1 class="display-4 font-weight-bold">О клубе</h1>
            <p class="lead">Современное пространство для спорта и отдыха</p>
        </div>
    </div>
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="font-weight-bold mb-4">Больше о нас</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-muted">FitLife был основан в 2025 году с простой миссией – сделать фитнес доступным и комфортным. Мы объединили передовое оборудование, профессиональных тренеров и уютную атмосферу, чтобы каждый мог заниматься с удовольствием.</p>
                    <p class="text-muted">Сегодня FitLife – это сеть современных клубов, где ценят индивидуальный подход. Мы постоянно развиваемся, внедряем новые программы и следим за тем, чтобы наши гости чувствовали себя частью большого спортивного сообщества.</p>
                </div>
                <div class="col-lg-6">
                    <img src="img/club.jpg" alt="Ресепшн FitLife" class="img-fluid rounded club-about-img">
                </div>
            </div>
        </div>
    </section>
    <section id="values" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center font-weight-bold mb-5">Ценности</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Профессионализм</h5>
                        <p class="small text-muted mt-2">Тренеры с международной сертификацией и опытом работы</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <h5>Комфорт</h5>
                        <p class="small text-muted mt-2">Просторные залы, премиальное оборудование и зоны отдыха</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h5>Забота</h5>
                        <p class="small text-muted mt-2">Персональные программы тренировок и сопровождение</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Развитие</h5>
                        <p class="small text-muted mt-2">Новые направления, мастер-классы и фитнес-события</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="spaces" class="py-5">
        <div class="container">
            <h2 class="text-center font-weight-bold mb-5">Помещения и оборудование</h2>
            <div class="row">
                <div class="col-md-4 gallery-item">
                    <img src="img/gym.jpg" alt="Тренажёрный зал" class="img-fluid rounded gallery-img">
                    <div class="gallery-caption mt-2">Тренажёрный зал</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="img/pool.jpg" alt="25-метровый бассейн" class="img-fluid rounded gallery-img">
                    <div class="gallery-caption mt-2">25-метровый бассейн</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="img/spa.jpg" alt="SPA и хаммам" class="img-fluid rounded gallery-img">
                    <div class="gallery-caption mt-2">SPA и хаммам</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="img/yoga.jpg" alt="Студия йоги и пилатеса" class="img-fluid rounded gallery-img">
                    <div class="gallery-caption mt-2">Студия йоги и пилатеса</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="img/cardio.jpg" alt="Кардиозона" class="img-fluid rounded gallery-img">
                    <div class="gallery-caption mt-2">Кардиозона</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="img/crossfit.jpg" alt="Зона кроссфита" class="img-fluid rounded gallery-img">
                    <div class="gallery-caption mt-2">Зона кроссфита</div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center font-weight-bold mb-5">Команда</h2>
            <div class="row">
                <div class="col-md-3 text-center mb-4">
                    <img src="img/anna_sokolova.jpg" alt="Анна" class="team-img">
                    <h6 class="mb-1">Анна</h6>
                    <small class="text-purple">Фитнес-йога</small>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <img src="img/maksim_denisov.jpg" alt="Максим Д." class="team-img">
                    <h6 class="mb-1">Максим</h6>
                    <small class="text-purple">Силовой тренинг</small>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <img src="img/elena_krylova.jpg" alt="Елена" class="team-img">
                    <h6 class="mb-1">Елена</h6>
                    <small class="text-purple">Растяжка</small>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <img src="img/dmitriy_pavlov.jpg" alt="Дмитрий" class="team-img">
                    <h6 class="mb-1">Дмитрий</h6>
                    <small class="text-purple">Кроссфит</small>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="coaches.php" class="btn btn-outline-purple">Все тренеры</a>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="text-center font-weight-bold mb-5">Частые вопросы</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="accordion-card">
                        <div class="accordion-header" data-toggle="collapse" data-target="#faq1">
                            <span>Есть ли пробное занятие?</span>
                            <span class="accordion-arrow">▼</span>
                        </div>
                        <div id="faq1" class="collapse">
                            <div class="accordion-body">
                                Да, мы предлагаем бесплатное пробное занятие для новых клиентов. Вы можете посетить любую групповую тренировку или получить консультацию тренера.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" data-toggle="collapse" data-target="#faq2">
                            <span>Можно ли заморозить абонемент?</span>
                            <span class="accordion-arrow">▼</span>
                        </div>
                        <div id="faq2" class="collapse">
                            <div class="accordion-body">
                                Да, абонемент можно заморозить на срок от 7 до 30 дней в зависимости от тарифа. Услуга предоставляется бесплатно.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" data-toggle="collapse" data-target="#faq3">
                            <span>Нужна ли медицинская справка?</span>
                            <span class="accordion-arrow">▼</span>
                        </div>
                        <div id="faq3" class="collapse">
                            <div class="accordion-body">
                                Для посещения тренажёрного зала справка не требуется. Для бассейна необходима справка от терапевта.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-card">
                        <div class="accordion-header" data-toggle="collapse" data-target="#faq4">
                            <span>Есть ли парковка?</span>
                            <span class="accordion-arrow">▼</span>
                        </div>
                        <div id="faq4" class="collapse">
                            <div class="accordion-body">
                                Да, у клуба есть бесплатная парковка для посетителей на 30 мест.
                            </div>
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