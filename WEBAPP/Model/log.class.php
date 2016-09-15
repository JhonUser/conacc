<!-- Jhon T. Gómez -->
<?php

  class Login{
    public static function validar($name){
      try{

        $pdo=Conexion::Abrirbd();
        $consul = "SELECT usuario.usu_cod, usuario.usu_nom, usuario.usu_nick, usuario.usu_pass, rol.rol_cod, rol.rol_nombre FROM rol INNER JOIN usuario ON rol.rol_cod = usuario.rol_cod AND usuario.usu_nick = ?";
        $mostrar = $pdo->prepare($consul);
        $mostrar->execute(array($name));
        $dato=$mostrar->fetch(PDO::FETCH_BOTH);
        return $dato;

        Conexion::Cerrarbd();
      }
      catch (Exception $e) {
          die( "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode());
      }
    }
  }
?>
