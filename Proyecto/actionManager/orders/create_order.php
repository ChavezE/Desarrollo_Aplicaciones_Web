<?php
    require_once "../../config.php";
    // Get  db
    include '../../dataAccess/plannerDAO.php';
  	include '../../dataAccess/orderDAO.php';
    include '../../model/User.php';
    include '../../model/Planner.php';
  	include '../../model/Order.php';

    session_start();

    $newOrder = new Order($_POST['plannerID'], $_SESSION['UserID']);
    $newOrder->plannerID = $_POST['plannerID'];
    $newOrder->userID = $_SESSION['UserID'];
    $newOrder->cost = $_POST['totalAmount'];
    $newOrder->quantity = $_POST['quantity'];


    if(!create_order($newOrder)){
      http_response_code(404);
      die();
    }


?>
