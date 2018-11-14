$(document).ready(function(){

	// PROCESSING LOGIN
	$("#login_sign_in_btn").on("click", function(event){
		event.preventDefault();
		console.log("login script, processing login");

		var form = $('#sign_in_form');

		$.ajax({
			url: "../actionManager/authenticate/process_login.php",
			type : 'POST',
			data: form.serialize(),
			success: function(data, status, jqXHR){
				window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");

			},
			error: function(error){
				console.log(error);
				// $("body").html(error.responseText);
				//window.location.href = "http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/my_404.php";

			}
		});
	});


	// PROCESSING REGISTRATION
	$('#login_register_btn').on('click', function(e){
		e.preventDefault();

		console.log("login script, processing registration");

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

	});

});
