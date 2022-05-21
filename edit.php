<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="css/edit.css">
    <script type="text/javascript" src="js/reg.js"></script>
    <link rel="stylesheet" href="css/pri.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <meta charset="UTF-8">
    <title>Эдельвейс</title>
</head>
    <body>
        <header class="site-header">
            <div class="container">
                <nav class="main-nav">
                    <a href="glav.php" class="logo">
                        <img src="img/logo.png" alt="Эдельвейс" width="60" height="60">
                    </a>
                    <ul class="site-menu">
                        <li><a href="company.php">Компания</a></li>
                        <li><a href="kotalog.php">Каталог</a></li>
                        <li><a href="contact.php">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div id="table" class="table">
                <h1>Редактирование</h1>
                <form action="PHP/edit.php" method="POST">
                    <input type="password" name="old_password" placeholder="Старый пароль" id="old_password"><br><br>
                    <input type="password" name="password" placeholder="Новый пароль" id="password"><br><br>
                    <input type="password" name="password2" placeholder="Повторите пароль" id="password2"><br><br>
                    <button type="submit" name="submit" id="submit">Изменить</button>
                </form>
                <br>
                <button onclick="window.location.href='glav.php'">Отмена</button>
            </div>
        </main>
        <footer class="site-footer">
            <div class="container footer-columns-container">
                <div class="left-column">
                    <p class="logo-container">
                        <a href="glav.php" class="logo"><img src="img/logo.png" alt="Эдельвейс"width="60" height="60"></a>
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
                            <a class="footer-submenu-title" href="company.php">Компания</a>
                            <ul class="footer-submenu">
                                <li><a href="company.php">История</a></li>
                                <li><a href="company.php">Миссия</a></li>
                                <li><a href="company.php">Команда</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="footer-submenu-title" href="kotalog.php">Каталог</a>
                            <ul class="footer-submenu">
                                <li><a href="kotalog.php">Боты</a></li>
                                <li><a href="kotalog.php">Сайты</a></li>
                                <li><a href="kotalog.php">Конструкторы</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="footer-submenu-title" href="contact.php">Контакты</a>
                            <ul class="footer-submenu">
                                <li><a href="contact.php">Связь со мной</a></li>
                                <li><a href="contact.php">Место учебы</a></li>
                                <li><a href="contact.php">Время работы</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="navigation">
            <div class="menutoggle"></div>
            <div class="userBx">
                <div class="imgBx">
                    <?php
                        $user_name = $_COOKIE['user'];
                        $mysql = new mysqli('localhost', 'root', '', 'users');
                        $result = $mysql->query("SELECT `avatar` FROM `user` WHERE `name` = '$user_name'");
                        $user = $result->fetch_assoc();
                    ?>
                    <img src="PHP/upload/<?php echo $user['avatar'] ?>">
                </div>
                <p class="username"><?php echo $_COOKIE['user'] ?></p>
            </div>
            <ul class="menu">
                <li><a href="galery.html"><ion-icon name="images-outline"></ion-icon>Галерея</a></li>
                <li><a href="vse labi.php"><ion-icon name="map-outline"></ion-icon>лабы</a></li>
                <li><a href="main.html"><ion-icon name="game-controller-outline"></ion-icon>игра</a></li>
                <li><a href="https://vk.com/cheburashka360"><ion-icon name="call-outline"></ion-icon>Написать мне</a></li>
                <li><a href="PHP/update.php"><ion-icon name="lock-closed-outline"></ion-icon>Сменить пароль</a></li>
                <li><a href="PHP/exit.php"><ion-icon name="exit-outline"></ion-icon>Выход</a></li>
            </ul>
        </div>
        <script type="text/javascript">
            let menuToggle = document.querySelector('.menutoggle');
            let navigation = document.querySelector('.navigation');
            menuToggle.onclick = function(){
                navigation.classList.toggle('active')
            }
        </script>
    </body>
</html>