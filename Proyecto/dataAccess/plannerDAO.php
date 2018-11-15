<?php
include_once 'dbConnection.php';

function get_all_planner_meta(){
	$db = Database::getConnection();

	try{
		$stmt = $db->prepare("SELECT * FROM planners");

		$stmt->execute();

      // Query data
		$result = $stmt->fetchAll();
		return $result;
	}catch (PDOException $ex){
		echo $ex->getMessage();
		die($ex->getMessage());
	}
}

function get_planner_by_id($id){
	$db = Database::getConnection();

	try{
		$stmt = $db->prepare("SELECT * FROM planners WHERE PlannerID = ?");
		$stmt->bindParam(1, $id, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetchAll()[0];
	}catch (PDOException $ex){
		echo $ex->getMessage();
		die($ex->getMessage());
	}
}

?>
