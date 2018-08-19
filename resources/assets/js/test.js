
// let emailLabel      = document.getElementById('label-email'),
// 		passwordLabel   = document.getElementById('label-password');

// var inputEmail = document.getElementById('email');
// var inputPassword = document.getElementById('password');

// inputEmail.addEventListener("focus", function() {
// 	this.classList.add('focused');
// }, true);
// inputEmail.addEventListener("blur", function() {
// 	this.classList.remove('focused');
// }, true);

// inputPassword.addEventListener("focus", function() {
// 	this.classList.add('focused');
// }, true);



	// this.previousSibling
	var inputPassword = document.getElementsByTagName('input[type=password]');

	

	if (document.addEventListener) {
		document.activeElement.addEventListener("focus", function() {
			this.classList.add('focused');
			this.previousSibling.classList.add('focused');
		}, true);

		document.activeElement.addEventListener("blur", function() {
			this.classList.remove('focused');
		}, true);

	}


function getPwdInputs() {
	var ary = [];
	var inputs = document.getElementsByTagName("input");
	for (var i=0; i<inputs.length; i++) {
		if (inputs[i].type.toLowerCase() === "password") {
			ary.push(inputs[i]);
		}
	}
	return ary;
}


passwordLabel.addEventListener('click', () => {
	passwordLabel.classList.add('labelfocus');
});

emailLabel.addEventListener('click', () => {
	emailLabel.classList.add('labelfocus');
});