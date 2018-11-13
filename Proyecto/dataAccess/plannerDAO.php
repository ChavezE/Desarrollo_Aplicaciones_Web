<?php 
include 'dbConnection.php';
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
?>