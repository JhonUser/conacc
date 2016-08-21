<?php
require_once("../Model/conexion.php");
require_once("../Model/modulo.class.php");
$accion=$_REQUEST["accion"];

switch ($accion) {
	case 'Guardar':
		$modu_cod=$_POST["txt_moducod"];
		$modu_nom=$_POST["txt_modunom"];
		try {
			Gestion_modulo::Guardar($modu_cod, $modu_nom);
			echo "Guardo con exito";
		} catch (Exception $e){
			echo $e;
		}
		break;
	case 'Modificar':
		 $modu_cod=$_POST["txt_moducod"];
		 $modu_nom=$_POST["txt_modunom"];
		try { 
			Gestion_modulo::Modificar($modu_cod, $modu_nom);
			echo "Modifico con exito";
			//header("location:../views/consulta.modulo.php");
		} catch (Exception $e){
			echo $e;
		}
		break;
	case 'Borrar':
		$modu_cod= $_GET["modu_cod"];
		try{
		Gestion_modulo::Eliminar($modu_cod);
       		 echo "Eliminó con exito";
       		 echo "<a href='../Views/consulta.modulo.php'>Volver</a>";
      	}catch (Exception $e){
       		 	echo $e;
       		 }
     	break;			
}
header("location:../views/consulta.modulo.php");
?>