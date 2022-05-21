function sub(form) {
	let name = document.getElementById('name').value;
	let password = document.getElementById('password').value;
	let password2 = document.getElementById('password2').value;

	if (name == "") {
		alert("Введите ваше имя!");
	}
	else if (password == "") {
		alert("Придумайте пароль!");
	}
	else if (password2 == "") {
		alert("Повторите пароль!");
	}
	else if (password.length < 6) {
		alert("Длина пароля должна быть не меньше 6 символов")
	}
	else if (password != password2) {
		alert("Пароли не совпадают")
	}
	else if (password == password2) {
		window.location.href = 'glav.html';
	}

	return false;
};