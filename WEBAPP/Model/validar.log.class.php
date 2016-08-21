<?php

  class login{


    public static function valida($name,$pass){
      try {

        $pdo=Conexion::Abrirbd();

        $verificar="SELECT * FROM usuario WHERE usu_nick=?";

        $mostrar=$pdo->prepare($verificar);

        $mostrar->execute(array($name));

        $dato=$mostrar->fetch(PDO::FETCH_BOTH);

          /*echo '<script type="text/javascript">
                  sweetAlert("Oops...", "Something went wrong!", "error"); window.location="../Views/index.php";
                </script>';*/
          #echo "<script>alert('Usted esta siendo redireccionado a la pagina principal') window.location='index.php'</script>";

            #echo '<script language="javascript">sweetAlert("Oops...", "Something went wrong!", "error");</script>';
            return $dato;

        Conexion::Cerrarbd();
      }

      catch (Exception $e) {
          echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
      }
    }
  }
?>
