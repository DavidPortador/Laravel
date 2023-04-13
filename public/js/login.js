function showPassword() {
	const showPass = document.getElementById('showPassword');
	const clave_input = document.getElementById('clave');
	if (showPass.classList.contains('fa-eye-slash')) {
		showPass.classList.add("fa-eye");
		showPass.classList.remove("fa-eye-slash");
		clave_input.type = "text"
	}
	else {
		showPass.classList.add("fa-eye-slash");
		showPass.classList.remove("fa-eye");
		clave_input.type = "password"
	}
}

function showErrors() {
	const email = document.getElementById('correo');
	const lblemail = document.getElementById('label_email_error');
	const pass = document.getElementById('clave');
	email.classList.add("input-login-error");
	email.classList.remove("input-login");
	pass.classList.add("input-login-error");
	pass.classList.remove("input-login");
	lblemail.classList.add("labelformErrorAct");
	lblemail.classList.remove("labelformError");
}

function login() {
	location.href = "home.html";
}