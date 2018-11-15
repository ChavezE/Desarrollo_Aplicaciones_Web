$(document).ready(function(){

	// LOGIN
	$("#init_sesion_btn").on("click", function(event){
		event.preventDefault();
		console.log("home script");

		// Reach login view
		window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/views/login.php");
	});

	// Processing Logout
	$("#logout_btn").on("click", function(e){
		e.preventDefault();
		console.log("que pedo");

		$.ajax({
			url: "actionManager/authenticate/process_logout.php",
			type : 'GET',
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

	// REGISTER
	$("#register_btn").on("click", function(event){
		event.preventDefault();
		// Reach Register view
		window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/views/registration.php");
	});

});
