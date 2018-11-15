<?php
  include '../../dataAccess/userDAO.php';
  include '../../model/User.php';

  // Check if username exist, if it does, then return error
  $user_exists = user_exists($_POST["useremail"]);
  if($user_exists){
    echo "El usuario ya existe";
    http_response_code(404);
    exit();
  }

?>
