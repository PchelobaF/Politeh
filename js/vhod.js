function sub(form) {
	let name = document.getElementById('name').value;
	let password = document.getElementById('password').value;

	if (name == "") {
		alert("Введите ваше имя!");
	}
	else if (password == "") {
		alert("Введите пароль!");
	}
	else if (password.length < 6) {
		alert("Неверный пароль")
	}
	else {
		alert("все хорошо")
	}

	return false;
};