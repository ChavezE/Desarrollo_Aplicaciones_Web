$(document).ready(function(){

  $('#plannerQuantity').on('focusout', function(e){
    q = $(this).val();
    unitCost = $('#unitCost_planner').html();
    unitCost = unitCost.replace(/\s/g, ""); // Eliminate spaces
    $('#totalAmount').html(q*unitCost);

  });

  $('#plannerQuantity').on('focusout', function(e){
    

    $.ajax({
      url: "../actionManager/authenticate/process_login.php",
      type : 'POST',
      data: {
        'planerID' : 1,
        'quantity' :
      },
      success: function(data, status, jqXHR){
        console.log("Request correcta");
        window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");

      }
    });

  });



});
