<div class="modal fade" id="authModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0 pt-2">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body pt-0 pb-2">
                <ul class="nav nav-tabs justify-content-center border-0" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#loginTab">Вход</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#registerTab">Регистрация</a></li>
                </ul>
                <div class="tab-content mt-2">
                    <div class="tab-pane active" id="loginTab">
                        <form id="loginForm">
                            <div class="form-group mb-2"><label class="mb-0 small">Логин</label><input type="text" class="form-control" id="loginLogin" required></div>
                            <div class="form-group mb-2"><label class="mb-0 small">Пароль</label><input type="password" class="form-control" id="loginPassword" required></div>
                            <button type="submit" class="btn btn-purple w-100">Войти</button>
                            <div id="loginMessage" class="mt-2 text-center small"></div>
                        </form>
                    </div>
                    <div class="tab-pane" id="registerTab">
                        <form id="registerForm">
                            <div class="form-group mb-2"><label class="mb-0 small">Фамилия</label><input type="text" class="form-control" id="regLastName" required></div>
                            <div class="form-group mb-2"><label class="mb-0 small">Имя</label><input type="text" class="form-control" id="regFirstName" required></div>
                            <div class="form-group mb-2"><label class="mb-0 small">Отчество</label><input type="text" class="form-control" id="regPatronymic"></div>
                            <div class="form-group mb-2"><label class="mb-0 small">Телефон</label><input type="tel" class="form-control" id="regPhone" required></div>
                            <div class="form-group mb-2"><label class="mb-0 small">Логин</label><input type="text" class="form-control" id="regLogin" required></div>
                            <div class="form-group mb-2"><label class="mb-0 small">Пароль</label><input type="password" class="form-control" id="regPassword" required></div>
                            <button type="submit" class="btn btn-purple w-100">Зарегистрироваться</button>
                            <div id="registerMessage" class="mt-2 text-center small"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// проверка статуса авторизации
function checkAuth() {
    // проверяем, находимся ли мы на странице profile.php
    const isProfilePage = window.location.pathname.includes('profile.php');
    
    fetch('auth_handler.php?check=' + Date.now())
        .then(response => response.text())
        .then(data => {
            const authLink = document.getElementById('authLink');
            if(data !== 'not_logged') {
                // если пользователь авторизован и НЕ на странице profile.php
                if(!isProfilePage) {
                    authLink.innerHTML = '<a href="profile.php" class="nav-link text-purple font-weight-bold">Личный кабинет</a>';
                }
                // на profile.php кнопка "Выйти" уже есть в меню (она не через authLink)
            } else {
                // не авторизован — показываем модальное окно
                authLink.innerHTML = '<a href="#" class="nav-link text-purple font-weight-bold" data-toggle="modal" data-target="#authModal">Личный кабинет</a>';
            }
        });
}

// вход
document.getElementById('loginForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new URLSearchParams();
    formData.append('login', document.getElementById('loginLogin').value);
    formData.append('password', document.getElementById('loginPassword').value);
    
    fetch('auth_handler.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'login_form=1&' + formData.toString()
    })
    .then(response => response.text())
    .then(data => {
        if(data === 'success') {
            window.location.href = 'profile.php';
        } else if(data === 'wrong_password') {
            document.getElementById('loginMessage').innerHTML = '<span class="text-danger">Неверный пароль</span>';
        } else if(data === 'user_not_found') {
            document.getElementById('loginMessage').innerHTML = '<span class="text-danger">Пользователь не найден</span>';
        }
    });
});

// регистрация
document.getElementById('registerForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new URLSearchParams();
    formData.append('last_name', document.getElementById('regLastName').value);
    formData.append('first_name', document.getElementById('regFirstName').value);
    formData.append('patronymic', document.getElementById('regPatronymic').value);
    formData.append('phone', document.getElementById('regPhone').value);
    formData.append('login', document.getElementById('regLogin').value);
    formData.append('password', document.getElementById('regPassword').value);
    
    fetch('auth_handler.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'register_form=1&' + formData.toString()
    })
    .then(response => response.text())
    .then(data => {
        if(data === 'success') {
            window.location.href = 'profile.php';
        } else if(data === 'login_exists') {
            document.getElementById('registerMessage').innerHTML = '<span class="text-danger">Такой логин уже существует</span>';
        } else {
            document.getElementById('registerMessage').innerHTML = '<span class="text-danger">Ошибка при регистрации</span>';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    checkAuth();
});
</script>