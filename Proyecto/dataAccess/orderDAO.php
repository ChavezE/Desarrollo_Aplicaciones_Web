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

  function get_orders_by_userid($userID){
    $db = Database::getConnection();

    try{
  		$stmt = $db->prepare("SELECT * FROM orders WHERE UserID = ?");

      $stmt->bindParam(1, $userID, PDO::PARAM_INT); // UserID

  		$stmt->execute();

      $result = [];

        // Query data
  		$orders = $stmt->fetchAll();
      count($orders);
      $i = 0;
      foreach ($orders as $order) {
        $result[$i] = new Order($order['PlannerID'], $order['UserID']);
        $result[$i]->orderID = $order['OrderID'];
        $result[$i]->plannerID = $order['PlannerID'];
        $result[$i]->userID = $order['UserID'];
        $result[$i]->cost = $order['Cost'];
        $result[$i]->quantity = $order['Quantity'];
        $i += 1;
      }

      return $result;

  	}catch (PDOException $ex){
  		echo $ex->getMessage();
  		die($ex->getMessage());
  	}

  }

?>
