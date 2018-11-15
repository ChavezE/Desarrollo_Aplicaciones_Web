<?php
include_once 'dbConnection.php';

function retrieve_user_data($email_username, $pwd){
  $db = Database::getConnection();

  $stmt = $db->prepare("SELECT * FROM users WHERE Username=? AND Password=?");
  $stmt->bindParam(1, $email_username,PDO::PARAM_STR, 255);
  $stmt->bindParam(2, $pwd,PDO::PARAM_STR, 255);

  if ( !($stmt->execute()) ){
    echo "Ocurrio un error con el query<br>";
  }

  return $stmt->fetchAll();
}

function register_user_data(User $newUser){
  $db = Database::getConnection();

  $stmt = $db->prepare("INSERT INTO users (Username, Password, Name, LastName) values (?, ?, ?, ?)");

  $stmt->bindParam(1, $newUser->username, PDO::PARAM_STR, 255); // Password
  $stmt->bindParam(2, $newUser->pwd, PDO::PARAM_STR, 255); // Password
  $stmt->bindParam(3, $newUser->name, PDO::PARAM_STR, 255); // Name
  $stmt->bindParam(4, $newUser->lastName, PDO::PARAM_STR, 255); // LastName

  return $stmt->execute();

}

  ?>
