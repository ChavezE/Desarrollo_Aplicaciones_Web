$(document).ready(function(){

	// PROCESSING LOGIN
	$("#login_sign_in_btn").on("click", function(event){
		event.preventDefault();
		console.log("login script, processing login");


		// TODO:
			// Complete validation for these two inputs
				// YES Eugenio, this is for, you my love.

		// var validation_flag = false;

		// // validar nombre
		// let errMsg1 = document.getElementById("invalid-feedback-name");
		// if(/^[A-Za-z\s]+$/.test($('#name').val())){
		// 	errMsg1.style.display = "none";
		// }
		// else{
		// 	errMsg1.style.display = "inline";
		// 	validation_flag = true;
		// }

		validation_flag = true;
		var form = $('#sign_in_form');
		if(validation_flag){
			$.ajax({
				url: "http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/actionManager/authenticate/process_login.php",
				type : 'POST',
				data: form.serialize(),
				success: function(data, status, jqXHR){
					console.log("Request correcta");
					window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");

				},
				error: function(error){
					console.log(error);
					// $("body").html(error.responseText);
					window.location.href = "http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/my_404.php";

				}
			});
		}



	});


	// PROCESSING REGISTRATION
	$('#login_register_btn').on('click', function(e){
		e.preventDefault();

		console.log("login script, processing registration");

		var validation_flag = false;

		// validar nombre
		let errMsg1 = document.getElementById("invalid-feedback-name");
		if(/^[A-Za-z\s]+$/.test($('#name').val())){
			errMsg1.style.display = "none";
		}
		else{
			errMsg1.style.display = "inline";
			validation_flag = true;
		}

		// validar apellido
		let errMsg2 = document.getElementById("invalid-feedback-lastname");
		if(/^[A-Za-z\s]+$/.test($('#lastName').val())){
			errMsg2.style.display = "none";
		}
		else{
			errMsg2.style.display = "inline";
			validation_flag = true;
		}

		// validar email
		let errMsg3 = document.getElementById("invalid-feedback-email");
		var re_mail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(re_mail.test($('#useremail').val().toLowerCase())){
			errMsg3.style.display = "none";
		}
		else{
			errMsg3.style.display = "inline";
			validation_flag = true;
		}

		// Validate pass word
		let errMsg4 = document.getElementById("invalid-feedback-pwd");
		if(!isNullOrWhiteSpace($('#password').val())){
			errMsg4.style.display = "none";
		}
		else{
			errMsg4.style.display = "inline";
			validation_flag = true;
		}

		if (!validation_flag){
			var form = $('#register_form');

			$.ajax({
				url: "../actionManager/authenticate/register_new_user.php",
				type : 'POST',
				data: form.serialize(),
				success: function(data, status, jqXHR){
					//window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");
					window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");
				},
				error: function(error){
					console.log(error);
					// $("body").html(error.responseText);
					//window.location.href = "http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/my_404.php";
				}
			});
		}
	});


});


function isNullOrWhiteSpace(str) {
  return (!str || str.length === 0 || /^\s*$/.test(str))
}
