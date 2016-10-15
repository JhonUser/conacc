<!-- Jhon T. Gómez -->
<?php
  class Consulta{
    
      function Guardar_Accesorio($datos){
      	try {
          $conex = Conexion::Abrirbd();

          $consul = "INSERT INTO accesorio(compo_cod,regi_cod,acce_col,acce_can) VALUES(:com, :reg, :col, :can)";
          $info = $conex->prepare($consul);

          $info->bindValue(":com", $datos["com"]);
          $info->bindValue(":reg", $datos["reg"]);
          $info->bindValue(":col", $datos["col"]);
          $info->bindValue(":can", $datos["can"]);

        	$info->execute();

          Conexion::Cerrarbd();
      	}
        catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      	}
      }

    function Consultar_Accesorio(){
  		try {
        $conex = Conexion::Abrirbd();

        $consul = "SELECT * FROM accesorio";
        $info = $conex->prepare($consul);
    		$info->execute();
        $datos = $info->fetchALL(PDO::FETCH_BOTH);

        return $datos;

  	    Conexion::Cerrarbd();
  		}
      catch (Exception $e) {
  		  echo "Error: " . $e->getMessage();
  		}
    }

    function Modificar_Accesorio($datos){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "UPDATE accesorio SET compo_cod = ?,regi_cod = ?, acce_col = ?, acce_can = ?
                   WHERE acce_cod = ?";
        $info = $conex->prepare($consul);  
        $info->execute(array($datos["com"], $datos["reg"],$datos["col"],$datos["can"],$datos["cod"]));

        Conexion::Cerrarbd();
      }catch (Exception $e) {
        echo "Error: " . $e->getMessage() . " ,linea: " . $e->getLine();
      }
    }

    function Eliminar_Accesorio($codigo){
      try {
        $conex = Conexion::Abrirbd();

       $consul = "DELETE FROM accesorio WHERE acce_cod = ?";
        $info = $conex->prepare($consul);
        $info->execute(array($codigo));

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error" . $e->getMessage();
      }
    }

    function Datos_Modificar($codigo){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "SELECT * FROM accesorio WHERE acce_cod = ?";
        $info = $conex->prepare($consul);
        $info->execute(array($codigo));
        $result = $info->fetch(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . " ,linea: " . $e->getLine();
      }
    }

    function Consultar_Componente(){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "SELECT * FROM componente";
        $info = $conex->prepare($consul);
        $info->execute();
        $result = $info->fetchALL(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    function Consultar_Registro(){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "SELECT * FROM registro_producto";
        $info = $conex->prepare($consul);
        $info->execute();
        $result = $info->fetchALL(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>
