<?php
  include_once 'dbConnection.php';

  function create_order(Order $order){
    $db = Database::getConnection();
    
    $stmt = $db->prepare("INSERT INTO orders (UserID, PlannerID, Cost, Quantity) values (?, ?, ?, ?)");

    $stmt->bindParam(1, $order->userID, PDO::PARAM_INT); // UserID
    $stmt->bindParam(2, $order->plannerID, PDO::PARAM_INT); // PlannerID
    $stmt->bindParam(3, $order->cost, PDO::PARAM_INT); // Cost
    $stmt->bindParam(4, $order->quantity, PDO::PARAM_INT); // Quantity

    return $stmt->execute();
  }

?>
