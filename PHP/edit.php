<?php
	$mysql = new mysqli('localhost', 'root', '', 'users');
	$name = $_COOKIE['user'];
	$my_password = $mysql->query("SELECT `password` FROM `user` WHERE `name` = '$name'")->fetch_assoc()['password'];
	$old_password = md5(filter_var(trim($_POST['old_password']),FILTER_SANITIZE_STRING)."QWERTY12345");
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
	$password2 = filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);

	if ($old_password != $my_password) {
		echo "не правильный пароль!";
		exit();
	}

	else if ($password == "") {
		echo "Придумайте пароль!";
		exit();
	}
	else if ($password2 == "") {
		echo "Повторите пароль!";
		exit();
	}
	else if (mb_strlen($password) < 6) {
		echo "Длина пароля должна быть не меньше 6 символов";
		exit();
	}
	else if ($password != $password2) {
		echo "Пароли не совпадают";
		exit();
	}
	else if ($password == $password2) {
		$password = md5($password."QWERTY12345");

		$mysql->query("UPDATE `user` SET `password` = '$password' WHERE `name` = '$name'");
		$mysql->close();
	}
	header('location: ..\glav.php');