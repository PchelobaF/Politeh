<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="css/nachalnaia.css">
    <meta charset="UTF-8">
    <title>Эдельвейс</title>
</head>
    <body>
        <?php
            if ($_COOKIE['user'] == ''):
        ?>
        <header class="site-header">
            <div class="container">
                <nav class="main-nav">
                    <img class="logo" src="img/logo.png" alt="Эдельвейс" width="60" height="60">
                    <ul class="site-menu">
                    </ul>
                    <ul>
                        <li>
                            <button onclick="window.location.href='vhod.html'">Войти</button>
                            <button onclick="window.location.href='registration.html'">Регистрация</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div>
                <h1>Чтобы получить доступ к сайту нужно авторизоваться</h1>
            </div>
        </main>
        <footer class="site-footer">
            <div class="container footer-columns-container">
                <div class="left-column">
                    <p class="logo-container">
                        <a class="logo"><img src="img/Logo.png" alt="Эдельвейс"width="60" height="60"></a>
                        <span>Эдельвейс</span>
                    </p>
                    <p class="copyrights">
                        ООО «Эдельвейс».<br>
                        Все права защищены.
                    </p>
                </div>
                <div class="right-column">
                    <ul class="footer-menu">
                        <li>
                            <a class="footer-submenu-title">Компания</a>
                            <ul class="footer-submenu">
                                <li>История</li>
                                <li>Миссия</li>
                                <li>Команда></li>
                            </ul>
                        </li>
                        <li>
                            <a class="footer-submenu-title">Каталог</a>
                            <ul class="footer-submenu">
                                <li>Боты</li>
                                <li>Сайты</li>
                                <li>Конструкторы</li>
                            </ul>
                        </li>
                        <li>
                            <a class="footer-submenu-title">Контакты</a>
                            <ul class="footer-submenu">
                                <li>Связь со мной</li>
                                <li>Место учебы</li>
                                <li>Время работы</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <?php else:
            header('location: ..\glav.php');
        ?>
        <?php endif; ?>
    </body>
</html>