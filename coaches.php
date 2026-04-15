<?php
require_once 'db_connect.php'; // Подключение к базе данных
// Запрос на получение всех тренеров
$query = "SELECT * FROM trainers_kurs";
$trainers_result = mysqli_query($link, $query) or die("Ошибка: " . mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – Тренеры</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Опытные тренеры нашего фитнес клуба помогут достичь любых целей: 
    набор формы, похудение, спортивная подготовка.">
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
            <h1 class="display-4 font-weight-bold">Наши тренеры</h1>
            <p class="lead">Профессионалы с международной сертификацией</p>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <button class="filter-btn active" data-filter="all">Все</button>
                    <button class="filter-btn" data-filter="power">Силовой тренинг</button>
                    <button class="filter-btn" data-filter="yoga">Йога и растяжка</button>
                    <button class="filter-btn" data-filter="crossfit">Кроссфит</button>
                    <button class="filter-btn" data-filter="pool">Бассейн</button>
                </div>
            </div>
            <div class="row" id="coaches-container">
            <?php while($trainer = mysqli_fetch_assoc($trainers_result)): 
                // Определение категории тренера для фильтрации
                $specialty_lower = mb_strtolower($trainer['specialty']);
                if(strpos($specialty_lower, 'йога') !== false || strpos($specialty_lower, 'растяжка') !== false) {
                    $category = 'yoga';
                } elseif(strpos($specialty_lower, 'силовой') !== false || strpos($specialty_lower, 'бодибилдинг') !== false || strpos($specialty_lower, 'реабилитация') !== false) {
                    $category = 'power';
                } elseif(strpos($specialty_lower, 'кроссфит') !== false || strpos($specialty_lower, 'функциональный') !== false) {
                    $category = 'crossfit';
                } elseif(strpos($specialty_lower, 'бассейн') !== false || strpos($specialty_lower, 'аквааэробика') !== false) {
                    $category = 'pool';
                } else {
                    $category = 'other';
                }
            ?>
            <div class="col-lg-4 col-md-6 coach-item" data-category="<?= $category ?>">
                <div class="coach-card">
                    <div class="coach-img-placeholder">
                        <?php if($trainer['photo'] && file_exists($trainer['photo'])): ?>
                            <img src="<?= $trainer['photo'] ?>" alt="<?= $trainer['first_name'] . ' ' . $trainer['last_name'] ?>" class="coach-photo">
                        <?php else: ?>
                            [ фото ]
                        <?php endif; ?>
                    </div>
                    <h4><?= $trainer['first_name'] . ' ' . $trainer['last_name'] ?></h4>
                    <div class="coach-specialty"><?= $trainer['specialty'] ?></div>
                    <div class="coach-experience">Опыт: <?= $trainer['experience'] ?> лет</div>
                    <div class="coach-experience"><?= $trainer['certification'] ?? '' ?></div>
                    <p class="small text-muted mt-3"><?= $trainer['description'] ?></p>
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
    <script>
    $(document).ready(function() {
        // Обработчик клика по кнопкам фильтрации
        $('.filter-btn').click(function() {
            // Убираем активный класс со всех кнопок
            $('.filter-btn').removeClass('active');
            // Добавляем активный класс нажатой кнопке
            $(this).addClass('active');
            // Получаем категорию для фильтрации
            var filterValue = $(this).data('filter');
            // Если выбрано "Все", показываем всех тренеров
            if (filterValue === 'all') {
                $('.coach-item').show();
            } else {
                // Скрываем всех, затем показываем только выбранную категорию
                $('.coach-item').hide();
                if (filterValue === 'yoga') {
                    $('.coach-item[data-category="yoga"]').show();
                } else if (filterValue === 'power') {
                    $('.coach-item[data-category="power"]').show();
                } else if (filterValue === 'crossfit') {
                    $('.coach-item[data-category="crossfit"]').show();
                } else if (filterValue === 'pool') {
                    $('.coach-item[data-category="pool"]').show();
                }
            }
        });
    });
</script>
<?php include 'auth_modal.php'; ?>
</body>
</html>