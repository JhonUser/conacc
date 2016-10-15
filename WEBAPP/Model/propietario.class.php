<?php
  class registro{
      function guardar_propietario($datos){
      	try {
          $conex = Conexion::Abrirbd();
          $consul = 
          "INSERT INTO propietario(prop_doc,prop_nom,prop_ape,prop_tel,prop_dir,prop_ema,prop_cen,prop_car)
                       VALUES(:doc,:nom,:ape,:tel,:dir,:ema,:cen,:car)";
          
          $info = $conex->prepare($consul);

        	$info->execute(array($datos["doc"], $datos["nom"],$datos["ape"],
                               $datos["tel"], $datos["dir"],$datos["ema"],
                               $datos["cen"], $datos["car"] ));

          Conexion::Cerrarbd();
      	}
        catch (Exception $e) {
          echo "Error" . $e->getMessage();
      	}
      }

    function consultar_propietario(){
  		try {
        $conex = Conexion::Abrirbd();

        $consul = "SELECT * FROM propietario";
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

    function modificar_propietario($datos){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "UPDATE propietario SET prop_doc = ?,prop_nom = ?,prop_ape = ?,prop_tel = ?,
                                          prop_dir = ?,prop_ema = ?,prop_cen = ?,prop_car = ? 
                                      WHERE prop_cod = ?";
        $info = $conex->prepare($consul);
        $info->execute(array($datos["doc"], $datos["nom"],$datos["ape"],
                             $datos["tel"], $datos["dir"],$datos["ema"],
                             $datos["cen"], $datos["car"],$datos["cod"])
                            );

        Conexion::Cerrarbd();
      }catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    function eliminar_propietario($codigo){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "DELETE FROM propietario WHERE prop_cod = ?";
        $info = $conex->prepare($consul);
        $info->execute($codigo);

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }

    function datos_modificar($codigo){
      try {
        $conex = Conexion::Abrirbd();

        $consul = "SELECT * FROM propietario WHERE prop_cod = ?";

        $info = $conex->prepare($consul);
        $info->execute($codigo);
        $result = $info->fetch(PDO::FETCH_BOTH);

        return $result;

        Conexion::Cerrarbd();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
?>
