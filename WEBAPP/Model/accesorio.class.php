<!-- Jhon T. Gómez -->
<?php
  class Consulta{
    private static $consul;
      public static function Guardar_Accesorio($datos){
      	try {
          $conex = Conexion::Abrirbd();

          self::$consul = "INSERT INTO accesorio(compo_cod,regi_cod,acce_col,acce_can) VALUES(:com, :reg, :col, :can)";
          $info = $conex->prepare(self::$consul);

          $info->bindValue(":com", $datos["com"]);
          $info->bindValue(":reg", $datos["reg"]);
          $info->bindValue(":col", $datos["col"]);
          $info->bindValue(":can", $datos["can"]);

        	$info->execute();

          Conexion::Cerrarbd();
      	}
        catch (Exception $e) {
          die("Error: " . $e->getMessage() . " ,linea: " . $e->getLine());
      	}
      }

    public static function Consultar_Accesorio(){
  		try {
        $conex = Conexion::Abrirbd();

        self::$consul = "SELECT * FROM accesorio";
        $info = $conex->prepare(self::$consul);
    		$info->execute();
        $datos = $info->fetchALL(PDO::FETCH_BOTH);

        return $datos;

  	    Conexion::Cerrarbd();
  		}
      catch (Exception $e) {
  		  die("Error: " . $e->getMessage() . " ,linea: " . $e->getLine());
  		}
    }

    public static function Modificar_Accesorio($datos){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "UPDATE accesorio SET compo_cod = :com,regi_cod = :reg,acce_col = :col, acce_can = :can
                         WHERE 	acce_cod = :cod";
        $info = $conex->prepare(self::$consul);
        $info->bindValue(":com", $datos["com"]);
        $info->bindValue(":reg", $datos["reg"]);
        $info->bindValue(":col", $datos["col"]);
        $info->bindValue(":can", $datos["can"]);
        $info->bindValue(":cod", $datos["cod"]);
        $info->execute();

        Conexion::Cerrarbd();
      }catch (Exception $e) {
        die("Error: " . $e->getMessage() . " ,linea: " . $e->getLine());
      }
    }

    public static function Eliminar_Accesorio($codigo){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "DELETE FROM accesorio WHERE acce_cod = :cod";
        $info = $conex->prepare(self::$consul);
        $info->bindValue(":cod", $codigo);
        $info->execute();

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error" . $e->getMessage();
      }
    }

    public static function Datos_Modificar($codigo){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "SELECT * FROM accesorio WHERE acce_cod = :cod";
        $info = $conex->prepare(self::$consul);
        $info->bindValue(":cod", $codigo);
        $info->execute();
        $result = $info->fetch(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        die("Error: " . $e->getMessage() . " , linea: " . $e->getLine());
      }
    }

    public static function Consultar_Componente(){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "SELECT * FROM componente";
        $info = $conex->prepare(self::$consul);
        $info->execute();
        $result = $info->fetchALL(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        die("Error: " . $e->getMessage() . " , linea: " . $e->getLine());
      }
    }

    public static function Consultar_Registro(){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "SELECT * FROM registro_producto";
        $info = $conex->prepare(self::$consul);
        $info->execute();
        $result = $info->fetchALL(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        die("Error: " . $e->getMessage() . " , linea: " . $e->getLine());
      }
    }
  }
?>
