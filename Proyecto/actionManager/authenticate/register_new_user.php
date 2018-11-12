<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register New User</title>
	<link rel="stylesheet" type="text/css" href="../css/show_login.css">
</head>
<body>
	<div id="login_msg">
	<?php
		include '../../dataAccess/userDAO.php';
		include '../../model/User.php';

    $USER = new User($_POST["username"], $_POST["name"]);
    $USER->setProps($_POST["username"], $_POST["password"], $_POST["name"], $_POST["lastName"]);

	$query_result = register_user_data($USER);
	// echo "Numero de rows:".$query_result->num_rows."<br>";
    // $_SESSION["UserID"] = $query_result;

    if($query_result){
      // header("Location: http://localhost/Desarrollo_Aplicaciones_Web/Proyecto");
      exit();
    }else{
      // http_response_code(404);
    	echo "problema con la base de datos";
    }


	?>
	</div>
</body>
</html>
