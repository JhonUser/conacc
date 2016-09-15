<!-- Jhon T. Gómez -->
<?php
  require_once("../Model/conexion.php");
  require_once("../Model/log.class.php");



    if (isset($_POST["sesion"])) {

      $name = $_POST["nombre"];
      $pass = $_POST["contrasena"];
      $inyeccion = "'or'1'='1";

          try {
            $datos = Login::Validar($name);

            if (password_verify($pass,$datos["usu_pass"])) {
                session_start();
                $_SESSION["codigo"]  = $datos[0];
                $_SESSION["nombre"]  = $datos[1];
                $_SESSION["rol"]     = $datos[3];
                $_SESSION["nom_rol"] = $datos[4];
                header("location: ../Views/dashboard.php");
              }
              elseif ($name == $inyeccion or $pass == $inyeccion) {
                echo "No se pase de listo con nosotros.<br>";
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
