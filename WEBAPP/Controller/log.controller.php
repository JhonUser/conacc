<!-- Jhon T. Gómez -->
<?php
  require_once("../Model/conexion.php");
  require_once("../Model/log.class.php");
  include 'comentado.php';


    if (isset($_POST["sesion"])) {

      $name = $_POST["nombre"];
      $EEE = htmlentities(addcslashes(str_replace("123456789",$name)));
      $pass = $_POST["contrasena"];
      $inyeccion = "'or'1'='1";

          try {
            $datos = login::validar($name);

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
            echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
          }
        }
?>
