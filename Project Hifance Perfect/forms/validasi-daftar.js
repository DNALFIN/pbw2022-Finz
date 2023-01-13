	//Validtion Code For Inputs

var nama = document.forms['form']['nama'];
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var nama_error = document.getElementById('nama_error');
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

nama.addEventListener('textInput', nama_Verify);
email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validated()
{
	if (nama.value.length < 3) {
		nama.style.border = "1px solid red";
		nama_error.style.display = "block";
		nama.focus();
		return false;
	}
	if (email.value.length < 11) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (password.value.length < 8) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}

}
function nama_Verify(){
	if (nama.value.length >= 2) {
		nama.style.border = "1px solid silver";
		nama_error.style.display = "none";
		return true;
	}
}
function email_Verify(){
	if (email.value.length >= 10) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	if (password.value.length >= 7) {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}

