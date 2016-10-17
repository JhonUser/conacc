<?php
  class Anuncio{
      function guardar_anuncio($datos){
      	try {
          $conex = Conexion::Abrirbd();
          $consul="INSERT INTO anuncios(anu_tit, anu_ima, anu_des, anu_fec, anu_hor) VALUES(?,?,?,?,?)";
          $info = $conex->prepare($consul);
        	$info->execute(array($datos["tit"], $datos["ima"],$datos["des"],$datos["fec"], $datos["hor"]));
          Conexion::Cerrarbd();
      	}
        catch (Exception $e) {
          echo "Error" . $e->getMessage();
      	}
      }
      function consultar_anuncio(){
    		try {
          $conex = Conexion::Abrirbd();
          $consul = "SELECT * FROM anuncios";
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
      function modificar_anuncio($datos){
        try {
          $conex = Conexion::Abrirbd();
          $consul = "UPDATE anuncios SET anu_tit = ?, anu_ima = ?, anu_des = ?, anu_fec = ?, anu_hor = ? WHERE anu_cod = ?";
          $info = $conex->prepare($consul);
          $info->execute(array($datos["tit"], $datos["ima"],$datos["des"],$datos["fec"], $datos["hor"],$datos["cod"]));
          Conexion::Cerrarbd();
        }catch (Exception $e) {
          echo "Error: " . $e->getMessage();
        }
      }
      function eliminar_anuncio($codigo){
        try {
          $conex = Conexion::Abrirbd();
          $consul = "DELETE FROM anuncios WHERE anu_cod = ?";
          $info = $conex->prepare($consul);
          $info->execute(array($codigo));
          Conexion::Cerrarbd();
        } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
        }
      }
      function datos_anuncio($codigo){
        try {
          $conex = Conexion::Abrirbd();
          $consul = "SELECT * FROM anuncios WHERE anu_cod = ?";
          $info = $conex->prepare($consul);
          $info->execute(array($codigo));
          $result = $info->fetch(PDO::FETCH_BOTH);
          return $result;
          Conexion::Cerrarbd();
        } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
        }
      }
    }
  ?>
