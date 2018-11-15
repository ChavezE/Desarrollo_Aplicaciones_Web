<?php
  include '../../dataAccess/userDAO.php';
  include '../../model/User.php';

  // Start the session
  session_start();

  // retrieve user data from form
  $user_username = $_POST["username"];
  $user_password = $_POST["password"];

  $query_result = retrieve_user_data($user_username, $user_password);

  if(count($query_result) == 1){
    foreach ($query_result as $user ) {
      // Create a session with UserID
      $_SESSION["UserID"] = $user['UserID'];
      $_SESSION["Username"] = $user['Name'];
    }

  } else{
    http_response_code(404);
    die();
  }

?>
