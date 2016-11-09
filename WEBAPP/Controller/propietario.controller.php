<?php require '../Model/conexion.php'; require '../Model/propietario.class.php';  ?>
<?php

  if (isset($_GET["e"])) {
    try {
      $codigo = $_GET["cod"];
      registro::eliminar_propietario($codigo);
      header("location: ../Views/dashboard.php?seccion=".base64_encode("r.propietario"));
    } catch (Exception $e) {
      echo "Error" . $e->getMessage();
    }
  }else {

      $datos = array('ced' => htmlentities($_POST["ced"]), 'nom' => htmlentities($_POST["nom"]),
                     'ape' => htmlentities($_POST["ape"]), 'tel' => htmlentities($_POST["tel"]),
                     'dir' => htmlentities($_POST["dir"]), 'ema' => htmlentities($_POST["ema"]),
                     'cen' => htmlentities($_POST["cen"]), 'car' => htmlentities($_POST["car"]));

      if (isset($_POST["g"])) {
        try{
            registro::guardar_propietario($datos);
            $crt="c";
            header("location: ../Views/dashboard.php?seccion=".base64_encode("r.propietario")."&crt");
          
          }catch(Exception $e){
            $e= $e->getCode();
            echo $e;
            //header("location: ../Views/dashboard.php?seccion=".base64_encode("r.propietario")."&e");
          }
        }

      if (isset($_POST["m"])) {
        try{
          $datos['cod'] = htmlentities($_POST["cod"]);
          registro::modificar_propietario($datos);
          $upt="u";
          echo "Registro modificado";
          header("location: ../Views/dashboard.php?seccion=".base64_encode("r.propietario")."&upt");
         }catch(Exception $e){
             header("location: ../Views/dashboard.php?seccion=".base64_encode("r.propietario")."&e");
         }
       }
     }
?>
