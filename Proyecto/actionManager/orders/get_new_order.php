<?php
    require_once "../../config.php";
    // Get  db
    include '../../dataAccess/plannerDAO.php';
  	include '../../dataAccess/orderDAO.php';
    include '../../model/User.php';
    include '../../model/Planner.php';
  	include '../../model/Order.php';

    session_start();
    $_Planner = get_planner_by_id($_GET['plannerID']);

    $newOrder = new Order($_GET['plannerID'], $_SESSION['UserID']);
    $newOrder->Planner = new Planner($_Planner['PlannerID'], $_Planner['imagePath']);

    $newOrder->Planner->setProps($_Planner['price'], $_Planner['description'],
                                  $_Planner['Color'],$_Planner['numOfPages'],
                                  $_Planner['spiralBind']);


    require('../../new_order.php');

?>
