$(document).ready(function(){

  $('.buy-planner').on('click', function(e){
    // Get planner id
    plannerID = $(this).attr('id');
    // Check if logged in
    $.ajax({
  		url: "../../actionManager/authenticate/is_user_logged.php",
  		type: 'GET',
  		success: function(data, status, jqXHR){
        // If the user is logged in
        window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/actionManager/orders/get_new_order.php?plannerID="+plannerID);
  		},
      error: function(){
        console.log('You need to be logged in to buy a planner');
      }
  	});
  });


});
