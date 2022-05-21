<?php 
	$avatar = $_FILES['user_avatar'];

	$avatarName = $_FILES['user_avatar']['name'];
	$avatarTmpName = $_FILES['user_avatar']['tmp_name'];
	$avatarSize = $_FILES['user_avatar']['size'];
	$avatarError = $_FILES['user_avatar']['error'];
	$avatarType = $_FILES['user_avatar']['type'];

	$avatarExt = explode('.', $avatarName);
	$avatarActualExt = strtolower(end($avatarExt));
	
	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($avatarActualExt, $allowed)) {
		if ($avatarError == 0) {
			$avatarNameNew = uniqid('', true).'.'.$avatarActualExt;
			$avatarDestination = 'upload/'.$avatarNameNew;
			move_uploaded_file($avatarTmpName, $avatarDestination);
		}
	} else {
		$avatarDestination = 'img/446e77bacc488d7d9309907640556bbf.jpg';
	}
?>

