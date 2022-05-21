<?php
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
	$password2 = filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);

	$mysql = new mysqli('localhost', 'root', '', 'users');
	$result = $mysql->query("SELECT * FROM `user` WHERE `name` = '$name'");
	$people = $result->fetch_assoc();

	if ($name == "") {
		echo "Введите ваше имя!";
		exit();
	}
	if ($people != "") {
		echo "Пользователь с таким именем уже есть!";
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
		if (!empty($_FILES['photo'])) {
			$photo = $_FILES['photo'];

			$name_photo = $photo['name'];
			$pathFile = __DIR__ .'/upload/'.$name_photo;

			if (!move_uploaded_file($photo['tmp_name'],$pathFile)) {
				echo 'Файл не смог загрузиться';
			}
		}
		$password = md5($password."QWERTY12345");

		$mysql->query("INSERT INTO `user` (`name`, `password`, `avatar`) VALUES('$name', '$password', '$name_photo')");
		$mysql->close();
		setcookie('user', $name, time() + 3600, "/");
		header('location: ..\glav.php');
	}