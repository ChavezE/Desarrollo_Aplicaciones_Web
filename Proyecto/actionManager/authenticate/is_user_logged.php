<?php
  session_start();

  if(!isset($_SESSION['UserID'])){
    echo "There is no user logged in";
    die();
  }

 ?>
