<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lab #8</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <header id="header">
          <div class="header-top">
              <div class="container">
                  <div class="row justify-content-center">
                      <div id="logo">
                          <a href="index.html"><img src="../img/logo.PNG" alt="" title="" /></a>
                          <div>
                            <?php
                              if (isset($_SESSION['UserID'])) {
                                echo "Bienvenido ";
                                echo $_SESSION['UserName'];
                              }
                            ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-center d-flex">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../order.php">Orders</a></li>
                            <li><a href="../comments.php">Comments</a></li>
                            <li><a href="../register.php">Sign Up</a></li>
                            <li><a href="../login.php">Login</a></li>
                        </ul>

                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->

        <div class="form-container">
            <form id="burrito">
              <?php
                include 'dataAccess/userDAO.php';
                include 'model/user.php';

                // retrieve user data from form
                $user_email = $_POST["email"];
                $user_pwd = $_POST["pwd"];

                $query_result = retrieve_user_data($user_email, $user_pwd);
                // echo "Numero de rows:".$query_result->num_rows."<br>";

                // User record found
                // there should only be 1 user with same credentials
                if($query_result->num_rows == 1){
                  while ($row = $query_result->fetch_assoc()){
                    // Build User Object
                    $USER = new User($row['email'], $row['nombre']);
                      $USER->setData($row['telefono'], $row['calle'], $row['num'], $row['ciudad']);

                      echo "<h1>Inicio de sesión exitoso!</h1><br>";
                      echo "<h2>Datos del usuario:</h2>";

                      // Show data
                      echo "UserId:	".$row['UserID']."<br>";
                      echo "Email:	".$USER->email."<br>";
                      echo "Nombre:	".$USER->Nombre."<br>";
                      echo "Telefono:	".$USER->Telefono."<br>";
                      echo "Calle:	".$USER->Calle."<br>";
                      echo "Numero:	".$USER->Numero."<br>";
                      echo "Ciudad:	".$USER->Ciudad."<br>";

                      // Create a session with UserID
                      $_SESSION["UserID"] = $row['UserID'];
                      $_SESSION["UserName"] = $USER->Nombre;
                  }
                } else{
                  // should handle this as wrong login data latter
                  die("Oooops! La clave o el usuario son incorrectos o no existen<br>");
                }
              ?>
            </form>

        </div>

        <input type="hidden" class="sessionVar" id="USERID" value="<?php echo (isset($_SESSION['UserID'])) ? $_SESSION['UserID'] : ''?>">
    </body>
</html>
