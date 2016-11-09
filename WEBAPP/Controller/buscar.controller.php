<?php  require '../Model/conexion.php'; require '../Model/propietario.class.php';

if (isset($_GET["num"])) {
 try {
   $numero = $_GET["num"];
   $res = registro::buscar($numero);
   foreach ($res as $key) {
     if ($key["prop_doc"] === $numero) {
       echo  "<p style='color:red'>Este Usuario ya existe</p>";
      //  echo "<p style='color:red'>" . $key['prop_nom'] . ' ' . $key['prop_ape'] . "</p>";
       break;
     }
   }
   if ($res == null) {
     echo "<p style='color:green'>Usuario disponible</p>";
   }
 } catch (Exception $e) {
   echo "Error";
 }
}

 ?>
