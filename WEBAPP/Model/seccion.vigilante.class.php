<?php
  class Vigilante{
    function sesion(){
      session_start();
      if (!isset($_SESSION["rol"]) or ($_SESSION["rol"] != 2)) {
        header("location: index.php");
      }
    }
    function seccion(){
      if (isset($_GET["p"])) {
        $p = $_GET["p"];
        switch ($p) {
          case 'propietario':
            include 'registro.propietario.php';
            break;
          case 'producto':
            include 'registro.registro_producto.php';
            break;
          case 'inicio':
            include 'inicio.php';
            break;

          default:
            # code...
            break;
        }
      }
    }
  }

 ?>
