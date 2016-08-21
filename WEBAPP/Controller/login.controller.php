<?php
  require_once("../Model/conexion.php");
  require_once("../Model/validar.log.class.php");
  include 'hola.php';


    if (isset($_POST["sesion_vigilante"])) {

      $name = $_POST["nombre"];
      $pass = $_POST["contrasena"];
          try {
            $datos = login::valida($name,$pass);

            if (password_verify($pass,$datos["usu_pass"])) {
                session_start();
                $_SESSION["nombre"]=$_POST["nombre"];
                $_SESSION["codigo"]  = $datos[1];
                $_SESSION["nombre"]  = $datos[3];
                header("location: ../Views/inicio.php");
              }
              else {
                echo "Error";
              }

          }
          catch (Exception $e) {
            echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
          }
        }
