<?php require_once '../Model/conexion.php'; require_once '../Model/anuncios.class.php';
      date_default_timezone_set('America/Bogota');

  if (isset($_GET["e"])) {
    try {
      $codigo = $_GET["cod"];
      Anuncio::eliminar_anuncio($codigo);
      echo "eliminar_anuncio";
    } catch (Exception $e) {
      echo "Error" . $e->getMessage();
    }
  } else {
    $imagen= $_FILES["ima"]["tmp_name"];
    $time  = time();
    $datos = array('tit' => htmlentities($_POST["tit"]),
                   'ima' =>     $_FILES["ima"]["name"],
                   'des' => htmlentities($_POST["des"]),
                   'fec' => date("d:m:y"),
                   'hor' => date("H:i:s", time()));

      if (isset($_POST["g"])) {
        try{
            move_uploaded_file($imagen, "../Views/images/".$datos["ima"]);
            Anuncio::guardar_anuncio($datos);
            $crt="c";
            header("location: ../Views/dashboard.php?seccion=anuncios"."&crt");
          }catch(Exception $e){
            echo "Error" . $e->getMessage();
          }
        }
      if (isset($_POST["m"])) {
        try{
          $datos['cod'] = htmlentities($_POST["cod"]);
          Anuncio::modificar_anuncio($datos);
          $upt="u";
          header("location: ../Views/dashboard.php?seccion=".base64_encode("r.propietario")."&upt");
         }catch(Exception $e){
           echo "Error" . $e->getMessage();
         }
       }
     }
?>
