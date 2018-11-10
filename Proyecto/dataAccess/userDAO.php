<?php
  include 'dbConnection.php';

  function retrieve_user_data($email_user, $pwd){


	}

	function register_user_data(User $newUser){
		echo $newUser->email;

		$db = Database::getConnection();

		$stmt = $db->prepare("INSERT INTO users (Username, Password, Name, LastName) values (?, ?, ?, ?)");

    $stmt->bindParam(1, $newUser->username, PDO::PARAM_STR, 255); // Password
    $stmt->bindParam(2, $newUser->pwd, PDO::PARAM_STR, 255); // Password
    $stmt->bindParam(3, $newUser->name, PDO::PARAM_STR, 255); // Name
    $stmt->bindParam(4, $newUser->lastName, PDO::PARAM_STR, 255); // LastName

    return $stmt->execute();

	}

?>
