<?php
  session_start();
  unset($_SESSION['UserID']);
  unset($_SESSION['Username']);
  session_destroy();

 ?>
