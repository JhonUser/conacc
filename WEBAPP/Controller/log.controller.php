<!-- Jhon T. Gómez -->
<?php require_once("../Model/conexion.php");
      require_once("../Model/log.class.php");

      if (isset($_POST["sesion"])) {
        $name = $_POST["nombre"];
        $pass = $_POST["contrasena"];
            try {
              $datos = Login::Validar($name);
              if (password_verify($pass,$datos["usu_pass"])) {
                  session_start();
                  $_SESSION["codigo"]  = $datos[0];
                  $_SESSION["nombre"]  = $datos[1];
                  $_SESSION["rol"]     = $datos[4];
                  if ($datos[4] == 1) {
                    header("location: ../Views/dashboard.php?seccion=anuncios");
                  } else {
                    header("location: ../Views/vigilante.php");
                  }
                }
                else {
                  echo "error";
                }
              }
            catch (Exception $e) {
              echo "Error: " . $e->getMessage();
            }
          }
  ?>
