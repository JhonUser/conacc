<?php require '../Model/conexion.php'; require '../Model/propietario.class.php'; $consulta = new registro; ?>
<!-- Jhon T. Gomez | Propietario -->
<?php

  if (isset($_GET["e"])) {
    try {
      $codigo = base64_decode($_GET["cod"])-500;
      $consulta->eliminar_propietario($codigo);
      header("location: ../Views/dashboard.php?seccion=" . base64_encode("r.propietario"));
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
            $consulta->guardar_propietario($datos);
            $crt="c";
            header("location: ../Views/dashboard.php?seccion=" . base64_encode("r.propietario")."&crt");
          }catch(Exception $e){
            echo "Error" . $e->getMessage();
          }
        }

      if (isset($_POST["m"])) {
        try{
          $datos['cod'] = htmlentities($_POST["cod"]);
          $consulta->modificar_propietario($datos);
          $upt="u";
          echo "Registro modificado";
          header("location: ../Views/dashboard.php?seccion=" . base64_encode("r.propietario")."&upt");
         }catch(Exception $e){
           echo "Error" . $e->getMessage();
         }
       }
     }
?>
