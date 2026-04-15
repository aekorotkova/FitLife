<?php
session_start();
require_once 'db_connect.php';

$query = "SELECT * FROM schedule_kurs ORDER BY 
    FIELD(day, 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'),
    time";
$result = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – Расписание</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Узнайте расписание тренировок и стоимость посещения в фитнес клубе. 
    Выбирайте удобное время и программу.">
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
            <h1 class="display-4 font-weight-bold">Расписание занятий</h1>
            <p class="lead">Выбирай удобное время и записывайся</p>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10">
                    <div class="schedule-table table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>День</th>
                                    <th>Время</th>
                                    <th>Занятие</th>
                                    <th>Тренер</th>
                                    <th>Зал</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- Вывод расписания из базы данных в таблицу -->
                            <tbody>
                                <?php while($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <!-- Отображение названия дня недели -->
                                    <td><strong><?= $row['day'] ?></strong></td>
                                    <!-- Отображение временного интервала занятия -->
                                    <td><?= $row['time'] ?></td>
                                    <!-- Отображение названия тренировки -->
                                    <td><?= $row['lesson'] ?></td>
                                    <!-- Отображение имени тренера в специальном стилизованном блоке -->
                                    <td><span class="trainer-badge"><?= $row['trainer'] ?></span></td>
                                    <!-- Отображение номера или названия зала -->
                                    <td><?= $row['room'] ?></td>
                                    <!-- Кнопка для открытия модального окна записи на данное занятие -->
                                    <td>
                                        <button class="btn btn-outline-purple btn-sm" 
                                                data-toggle="modal" 
                                                data-target="#signupModal" 
                                                data-lesson="<?= $row['lesson'] ?>" 
                                                data-trainer="<?= $row['trainer'] ?>" 
                                                data-time="<?= $row['day'] . ' ' . $row['time'] ?>">
                                            Записаться
                                        </button>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="signupModalLabel">Запись на занятие</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="signupForm" onsubmit="return false;">
                        <div class="form-group mb-4">
                            <label class="font-weight-bold">Занятие</label>
                            <input type="text" class="form-control modal-lesson-input" id="lessonInfo" readonly>
                        </div>
                        <div class="form-group mb-4">
                            <label class="font-weight-bold">Ваше имя</label>
                            <input type="text" class="form-control" id="userName" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group mb-4">
                            <label class="font-weight-bold">Телефон</label>
                            <input type="tel" class="form-control" id="userPhone" placeholder="+7 (___) ___-__-__" required>
                        </div>
                        <button type="button" class="btn btn-purple w-100" onclick="submitBooking()">Отправить заявку</button>
                    </form>
                    <div id="bookingMessage" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
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
        // Обработчик события открытия модального окна записи
        $('#signupModal').on('show.bs.modal', function (event) {
            // Получаем кнопку, которая вызвала модальное окно
            var button = $(event.relatedTarget);
            // Извлекаем данные из атрибутов кнопки
            var lesson = button.data('lesson');
            var trainer = button.data('trainer');
            var time = button.data('time');
            var modal = $(this);
            modal.find('#lessonInfo').val(lesson + ' · ' + trainer + ' · ' + time);
        });
        function submitBooking() {
            // Получаем значения из полей формы
            var lesson = document.getElementById('lessonInfo').value;
            var name = document.getElementById('userName').value;
            var phone = document.getElementById('userPhone').value;
            var messageDiv = document.getElementById('bookingMessage');
            // Проверка заполнения обязательных полей
            if(!name || !phone) {
                messageDiv.innerHTML = '<div class="alert alert-danger">Заполните имя и телефон</div>';
                return;
            }
            // Разбиение строки занятия на части по разделителю
            var parts = lesson.split(' · ');
            fetch('booking.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: 'lesson=' + encodeURIComponent(parts[0]) + 
                    '&trainer=' + encodeURIComponent(parts[1]) + 
                    '&lesson_time=' + encodeURIComponent(parts[2])
            })
            .then(response => response.text()) // Получение ответа от сервера в виде текста
            .then(data => {
                if(data == 'ok') {
                    // Успешная запись (вывод сообщения и перезагрузка страницы через 2 секунды)
                    messageDiv.innerHTML = '<div class="alert alert-success">Заявка отправлена! Статус можно отследить в личном кабинете.</div>';
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    // Ошибка при записи
                    messageDiv.innerHTML = '<div class="alert alert-danger">Ошибка при отправке</div>';
                }
            });
        }
    </script>
    <?php include 'auth_modal.php'; ?>
</body>
</html>