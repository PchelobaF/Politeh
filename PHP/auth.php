<?php
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

	if ($name == "") {
		echo "Введите ваше имя!";
		exit();
	}
	else if ($password == "") {
		echo "Введите пароль!";
		exit();
	}
	else if (mb_strlen($password) < 6) {
		echo "Длина пароля должна быть не меньше 6 символов";
		exit();
	}

	$password = md5($password."QWERTY12345");

	$mysql = new mysqli('localhost', 'root', '', 'users');

	$result = $mysql->query("SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'");
	$user = $result->fetch_assoc();

	if (empty($user) or count($user) == 0) {
		echo "Неверный логин или пароль";
		exit();
	}

	setcookie('user', $user['name'], time() + 3600, "/");

	$mysql->close();

	header('location: ..\glav.php');