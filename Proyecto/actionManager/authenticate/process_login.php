<?php
  include '../../dataAccess/userDAO.php';
  include '../../model/User.php';

  // Start the session
  session_start();

  // retrieve user data from form
  $user_username = $_POST["username"];
  $user_password = $_POST["password"];

  $query_result = retrieve_user_data($user_username, $user_password);

  if($query_result->num_rows == 1){
    while ($row = $query_result->fetch_assoc()){

      // Create a session with UserID
      $_SESSION["UserID"] = $row['UserID'];
      $_SESSION["UserName"] = $row['Username'];
    }
  } else{
    //http_response_code(404);
    //die();
  }

?>
