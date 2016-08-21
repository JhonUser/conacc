<?php
  require_once("../Model/conexion.php");
  require_once("../Model/validar.log.class.php");
  include 'hola.php';


    if (isset($_POST["sesion_vigilante"])) {


          try {
       login::valida($name,$pass);


          }
          catch (Exception $e) {
            echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
          }
        }
