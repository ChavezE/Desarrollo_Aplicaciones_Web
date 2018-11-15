<?php
  require_once "../../config.php";
  // Get  db
  include '../../dataAccess/plannerDAO.php';
  include '../../dataAccess/orderDAO.php';
  include '../../model/User.php';
  include '../../model/Planner.php';
  include '../../model/Order.php';

  session_start();

  $orders = get_orders_by_userid($_SESSION['UserID']);

  require('../../user_orders_index.php');


 ?>
