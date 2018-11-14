<?php 
	require('../config.php');

	// Get  db 
	include '../../dataAccess/plannerDAO.php';
	include '../../model/Planner.php';

	$planner_array_query = get_all_planner_meta();
	// build planner objects
	foreach ($planner_array_query as &$planner) {
    	$current_planner = new Planner($planner["PlannerID"], $planner["imagePath"]);

    	$current_planner->setProps($planner["price"],$planner["description"], $planner["Color"], 
    		$planner["numOfPages"], $planner["spiralBind"]);
       
		$planner_array[] = $current_planner;
	}

	// echo "$planner_Array";



	require('../../catalogo.php');

?>