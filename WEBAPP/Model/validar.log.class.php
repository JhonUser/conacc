<?php

  class login{


    public static function valida($name,$pass){
      try {

        $pdo=Conexion::Abrirbd();

        $verificar="SELECT * FROM usuario WHERE usu_nick=?";

        $mostrar=$pdo->prepare($verificar);

        $mostrar->execute(array($name));

        $dato=$mostrar->fetch(PDO::FETCH_ASSOC);


        if (password_verify($pass,$dato["usu_pass"])) {
            session_start();
            $_SESSION["nombre"]=$_POST["nombre"];
            header("location: ../Views/inicio.php");
          }
          else {
            echo "Error";
          }

          /*echo '<script type="text/javascript">
                  sweetAlert("Oops...", "Something went wrong!", "error"); window.location="../Views/index.php";
                </script>';*/
          #echo "<script>alert('Usted esta siendo redireccionado a la pagina principal') window.location='index.php'</script>";

            #echo '<script language="javascript">sweetAlert("Oops...", "Something went wrong!", "error");</script>';


        Conexion::Cerrarbd();
      }

      catch (Exception $e) {
          echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
      }
    }
  }
?>
