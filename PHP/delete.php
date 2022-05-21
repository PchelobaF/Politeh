<?php
	if (isset($_POST['delete'])) {
		$user_id = (int) $_POST['delete'];

		$mysql = new mysqli('localhost', 'root', '', 'users');
		$result = $mysql->query("DELETE FROM `user` WHERE `id` = '$user_id'");
    }
    header('location: ..\admin.php');
?>