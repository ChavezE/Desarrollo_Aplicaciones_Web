$(document).ready(function(){
	
	// LOGIN
	$("#init_sesion_btn").on("click", function(event){
		event.preventDefault();
		console.log("entre al evento");

		// Reach login view	
		window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/views/login.php");
	});

	// REGISTER
	$("#register_btn").on("click", function(evento){
		event.preventDefault();
		// Reach Register view
		window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/views/registration.php");
	});

});