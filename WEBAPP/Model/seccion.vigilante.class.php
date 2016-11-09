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
            include 'registro.propietario.vigilante.php';
            break;
          case 'producto':
            include 'registro.registro_producto.Vigilante.php';
            break;
          case 'inicio':
            include 'inicio.php';
            break;
          case 'r_producto':
            include 'registro.producto.php';
            break;
          case 'm.propietario':
            include 'modificar.propietario.php';
            break;
          default:
            # code...
            break;
        }
      }
    }
  }

 ?>
