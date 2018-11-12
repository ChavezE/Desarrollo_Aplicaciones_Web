$(document).ready(function(){

	// LOGIN
	$("#init_sesion_btn").on("click", function(event){
		event.preventDefault();
		console.log("home script");

		// Reach login view
		window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/views/login.php");
	});

	// REGISTER
	$("#register_btn").on("click", function(event){
		event.preventDefault();
		// Reach Register view
		window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/views/registration.php");
	});

});
