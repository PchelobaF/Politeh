<?php
	$mysql = new mysqli('localhost', 'root', '', 'users');
	$result = $mysql->query("SELECT * FROM `user`");
?>