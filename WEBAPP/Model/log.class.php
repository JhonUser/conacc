<?php

  class login{
    public static function validar($name){
      try {

        $pdo=Conexion::Abrirbd();

        $consul = "SELECT usuario.usu_cod, usuario.usu_nom, usuario.usu_nick, usuario.usu_pass, rol.rol_cod, rol.rol_nombre FROM usuario
                   INNER JOIN rol ON rol.rol_cod = usuario.rol_cod WHERE usuario.usu_nick = ?";

        $mostrar = $pdo->prepare($consul);
        $mostrar->execute(array($name));
        $dato=$mostrar->fetch(PDO::FETCH_BOTH);
        return $dato;

        Conexion::Cerrarbd();
      }

      catch (Exception $e) {
          echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
      }
    }
  }
?>
