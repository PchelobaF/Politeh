<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/pri.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<head>  
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
                <section>
                    <div class="container columns-container">
                        <h2>Мои контакты</h2>
                        <div>
                            <ul>
                                <li><strong>Вконтакте</strong><a href="https://vk.com/cheburashka360" title="ВК">  Мой ВК</a></li>
                                <li><strong>Mail.ru</strong>  Andrey23072003@mail.ru</li>
                                <li><strong>GitHub</strong><a href="https://github.com/PchelobaF" title="GitHub">  Мой Git</a></li>
                            </ul>
                        </div>
                        <h2>Место учебы</h2>
                        <div>
                            <ul>
                                <p><strong>УлГТУ</strong><br>Я учусь в УлГТУ(Ульяновском государственном техническом университете)<br>Факультет ФИСТ(факультет информационных систем и технологий)<br>Направление ИВТ(информатика и вычислительная техника)</p>
                            </ul>
                        </div>
                        <h2>Время работы</h2>
                        <div>
                            <ul>
                                <p>Я начинаю с 12 часов и не заканчиваю пока все не сделаю или же долго не могу понять где ошибка.<br>Сейчас я пишу код практически весь день, для того чтобы сделать хорошо работающие программы.<br>Я уже написал относительно много строк кода, как для себя, так и на заказ.</p>
                                <br>
                            </ul>
                        </div>
                    </div>
                </section>
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