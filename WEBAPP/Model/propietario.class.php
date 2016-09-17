<!-- Jhon T. Gómez -->
<?php
  class registro{
    private static $consul;
      public static function guardar_propietario($datos){
      	try {
          $conex = Conexion::Abrirbd();

          self::$consul = "INSERT INTO propietario(prop_doc,prop_nom,prop_ape,prop_tel,prop_dir,prop_ema,prop_cen,prop_car)
                           VALUES(:doc,:nom,:ape,:tel,:dir,:ema,:cen,:car)";

          $info = $conex->prepare(self::$consul);

          $info->bindValue(":doc", $datos["ced"]);
          $info->bindValue(":nom", $datos["nom"]);
          $info->bindValue(":ape", $datos["ape"]);
          $info->bindValue(":tel", $datos["tel"]);
          $info->bindValue(":dir", $datos["dir"]);
          $info->bindValue(":ema", $datos["ema"]);
          $info->bindValue(":cen", $datos["cen"]);
          $info->bindValue(":car", $datos["car"]);

        	$info->execute();

          Conexion::Cerrarbd();
      	}
        catch (Exception $e) {
          die("Error: " . $e->getMessage() . " ,linea: " . $e->getLine());
      	}
      }

    public static function consultar_propietario(){
  		try {
        $conex = Conexion::Abrirbd();

        self::$consul = "SELECT * FROM propietario";
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

    public static function modificar_propietario($datos){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "UPDATE propietario SET prop_doc = :doc,
                                                prop_nom = :nom,
                                                prop_ape = :ape,
                                                prop_tel = :tel,
                                                prop_dir = :dir,
                                                prop_ema = :ema,
                                                prop_cen = :cen,
                                                prop_car = :car
                         WHERE prop_cod = :cod";

        $info = $conex->prepare(self::$consul);

        $info->bindValue(":doc", $datos["ced"]);
        $info->bindValue(":nom", $datos["nom"]);
        $info->bindValue(":ape", $datos["ape"]);
        $info->bindValue(":tel", $datos["tel"]);
        $info->bindValue(":dir", $datos["dir"]);
        $info->bindValue(":ema", $datos["ema"]);
        $info->bindValue(":cen", $datos["cen"]);
        $info->bindValue(":car", $datos["car"]);
        $info->bindValue(":cod", $datos["cod"]);

        $info->execute();

        Conexion::Cerrarbd();
      }catch (Exception $e) {
        die("Error: " . $e->getMessage() . " ,linea: " . $e->getLine());
      }
    }

    public static function eliminar_propietario($codigo){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "DELETE FROM propietario WHERE prop_cod = :cod";

        $info = $conex->prepare(self::$consul);
        $info->bindValue(":cod", $codigo);
        $info->execute();

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        die("Error: " . $e->getMessage() . " ,linea: " . $e->getLine());
      }
    }

    public static function datos_modificar($codigo){
      try {
        $conex = Conexion::Abrirbd();

        self::$consul = "SELECT * FROM propietario WHERE prop_cod = :cod";

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
  }
?>
