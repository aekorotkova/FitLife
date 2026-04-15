<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FitLife – Контакты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Контактная информация и адрес нашего фитнес клуба. 
    Свяжитесь с нами для записи на пробное занятие.">
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
            <h1 class="display-4 font-weight-bold">Контакты</h1>
            <p class="lead">Всегда на связи</p>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <h2 class="font-weight-bold mb-4">FitLife</h2>
                    <p class="lead mb-4">Твой фитнес. Твой результат. Твоя жизнь.</p>
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <div>
                            <strong>Телефон</strong>
                            <p>+7 (999) 000-00-00</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">✉️</span>
                        <div>
                            <strong>Email</strong>
                            <p>info@fitlife.ru</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">⏰</span>
                        <div>
                            <strong>Часы работы</strong>
                            <p>Пн-Вс: 07:00 — 23:00</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <div>
                            <strong>Адрес</strong>
                            <p>ул. Спортивная, д. 10</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="text-muted">Подписывайтесь на нас в соцсетях:</p>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="mr-3">
                                    <img src="img/max.png" alt="MAX" class="social-icon-img">
                                </a>
                                <a href="javascript:void(0)" class="mr-3">
                                    <img src="img/vk.png" alt="ВКонтакте" class="social-icon-img">
                                </a>
                                <a href="javascript:void(0)" class="mr-3">
                                    <img src="img/rutube.png" alt="RUTUBE" class="social-icon-img">
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="form-card">
                        <h3 class="font-weight-bold mb-4">Напишите нам</h3>
                        <p class="text-muted mb-4">Оставьте заявку, и мы свяжемся с вами в ближайшее время</p>
                        <form id="contactForm">
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Ваше имя <span class="text-purple">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Введите имя" required>
                            </div>
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Телефон <span class="text-purple">*</span></label>
                                <input type="tel" class="form-control" id="phone" placeholder="+7 (___) ___-__-__" required>
                            </div>
                            <div class="form-group mb-4">
                                <label class="font-weight-bold">Сообщение</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Здесь Вы можете задать свой вопрос"></textarea>
                                <small class="text-muted">Например: "Сколько будет стоить разовое посещение?"</small>
                            </div>
                            <button type="submit" class="btn btn-purple btn-lg px-5 w-100">Отправить заявку</button>
                        </form>
                        <div id="formStatus" class="mt-3 text-center"></div>
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
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const statusDiv = document.getElementById('formStatus');
            statusDiv.innerHTML = '<span class="text-purple">Отправка...</span>';
            const formData = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                message: document.getElementById('message').value
            };
            try {
                await new Promise(resolve => setTimeout(resolve, 1000));
                statusDiv.innerHTML = '<span class="text-success">Спасибо! Заявка отправлена</span>';
                this.reset();
                setTimeout(() => {
                    statusDiv.innerHTML = '';
                }, 3000);
            } catch (error) {
                statusDiv.innerHTML = '<span class="text-danger">Ошибка. Попробуйте позже</span>';
            }
        });
    </script>
    <?php include 'auth_modal.php'; ?>
</body>
</html>