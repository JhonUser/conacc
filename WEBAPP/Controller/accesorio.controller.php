<!-- Jhon T. Gomez | Accesorio -->
<?php require '../Model/conexion.php'; require '../Model/accesorio.class.php'; $consulta = new Consulta; ?>
<?php
  if (isset($_GET["e"])) {
    try {
      $codigo = $_GET["cod"];
      $consulta->Eliminar_Accesorio($codigo);
      echo "<script>alert('Eliminado')</script>";
      header("location: ../Views/dashboard.php?seccion=r_accesorio");
    } catch (Exception $e) {
      echo "Error" . $e->getMessage();
    }
  }else {

      $datos = array('com' => htmlentities($_POST["com"]), 'reg' => htmlentities($_POST["reg"]),
                     'col' => htmlentities($_POST["col"]), 'can' => htmlentities($_POST["can"]));

      if (isset($_POST["g"])) {
        try{
            $consulta->Guardar_Accesorio($datos);
            header("location: ../Views/dashboard.php?seccion=r_accesorio");
          }catch(Exception $e){
            echo "Error" . $e->getMessage();
          }
        }

      if (isset($_POST["m"])) {
        try{
          $datos['cod'] = htmlentities($_POST["cod"]);
          $consulta->Modificar_Accesorio($datos);
          echo "Registro modificado";
         }catch(Exception $e){
           echo "Error" . $e->getMessage();
         }
       }
     }
?>
