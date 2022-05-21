<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="css/glav.css">
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
                        <img src="img/Logo.png" alt="Эдельвейс" width="60" height="60">
                    </a>
                <ul class="site-menu">
                    <li><a href="company.php">Компания</a></li>
                    <li><a href="kotalog.php">Каталог</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                    <?php
                        if ($_COOKIE['user'] == 'PchelobaF'):
                    ?>
                    <li><a href="admin.php">Админка</a></li>
                    <?php endif; ?>
                </ul>
                </nav>
                <section class="about-me">
                    <h1>Ефремов Андрей</h1>
                    <p>
                        ИВТАПбд-12<br>
                    </p>
                    <a href="contact.php" class="btn">Информация обо мне</a>
                </section>
            </div>
        </header>
        <main>
            <section class="new-works">
                <div class="container">
                    <h2>Следующие работы</h2>
                    <ul class="new-works-list">
                        <li>Помощник для студента (гибридный Чат-бот для всех соц. сетей).</li>
                        <li>Калькулятор со множеством функций.</li>
                        <li>Косметический бот для Telegram.</li>
                        <li>Конструктор ПК.</li>
                    </ul>
                </div>
            </section>
            <section class="my-universe">
                <div class="container columns-container">
                    
                    <div class="left-column">
                        <h2>Мой университет</h2>
                        <img src="img/ulgtu.jpg" alt="УЛГТУ" width="440" height="347">


                        <p><b>Идите учиться в лучший университет города Ульяновска, не пожалеете)))</b></p>
                        <p>У него очень интересная история.</p>
                        <p>О которой вы сможете узнать на их оффициальном сайте.</p>
                        <li><a href="https://ulstu.ru/about/history">История УЛГТУ</a></li>
                    </div>

                    
                    <div class="right-column">
                        <h2>Рекомендации для новых студентов.</h2>
                        <h3>Не забудьте взять с собой:</h3>
                        <ul class="recommendations-list">
                            <li><strong>Паспорт.</strong> Он вам пригодится если не сможете пройти на бюджет.</li>
                            <li><strong>Атестат о полном среднем образовании.</strong>Сможете похвастаться своими оценками.</li>
                            <li><strong>Фотографий побольше(они еще понадобятся).</strong> Они нужны не только для поступления.</li>
                            <li><strong>Портфолио.</strong> Поможет подняться в глазах преподавателей.</li>
                        </ul>

                        <h3>Этого лучше не делать в университете:</h3>
                        <ul class="recommendations-list">
                            <li><strong>Курить. </strong>Могут выгнать и это вредит твоему здоровью.</li>
                            <li><strong>Употреблять алкогольные напитки.</strong>Могут выгнать и это вредит твоему здоровью.</li>
                            <li><strong>Приходить с плохим настроением.</strong> А то его у тебя отберут.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <footer class="site-footer">
            <div class="container footer-columns-container">
                <div class="left-column">
                    <p class="logo-container">
                        <a href="glav.php" class="logo"><img src="img/Logo.png" alt="Эдельвейс"width="60" height="60"></a>
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