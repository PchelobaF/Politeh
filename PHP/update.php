<?php
	if (isset($_POST['update'])){
    	$user_id = (int) $_POST['delete'];

		$mysql = new mysqli('localhost', 'root', '', 'users');
		$result = $mysql->query("SELECT * FROM `user` WHERE `id` = '$user_id'");
	}
	header('location: ..\edit.php');
?>