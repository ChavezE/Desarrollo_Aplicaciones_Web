$(document).ready(function(){

  $('#plannerQuantity').on('focusout', function(e){
    q = $(this).val();
    unitCost = $('#unitCost_planner').html();
    unitCost = unitCost.replace(/\s/g, ""); // Eliminate spaces
    $('#totalAmount').html(q*unitCost);

  });

  $('#confirm_order').on('click', function(e){
    plannerQuantity = 1;
    if($('#plannerQuantity').val() != "")
      plannerQuantity = $('#plannerQuantity').val();

    $.ajax({
      url: "http://localhost/Desarrollo_Aplicaciones_Web/Proyecto/actionManager/orders/create_order.php",
      type : 'POST',
      data: {
        'plannerID' : $('#plannerID').val(),
        'quantity' : plannerQuantity,
        'totalAmount' : $('#totalAmount').html()
      },
      success: function(data, status, jqXHR){
        console.log("Request correcta");
        //window.location.replace("http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");

      }
    });

  });



});
