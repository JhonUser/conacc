<?php
require_once("../Model/conexion.php");
require_once("../Model/permiso.class.php");
$accion=$_REQUEST["accion"];

switch ($accion) {
	case 'Guardar':
		$rol_cod=$_POST["sele_rol"];
		$modu_cod=$_POST["sele_modu"];
		$estado_permi=$_POST["estado_permi"];
		$modulo_permi=$_POST["modu_permi"];
		try{
			Gestion_permiso::Guardar($rol_cod, $modu_cod, $estado_permi, $modulo_permi);
			echo "Guardo con exito";
		} catch (Exception $e){
			echo $e;
		}
		break;
	case 'Modificar':
		$rol_cod=$_POST["rol_cod"];
		$modu_cod=$_POST["modu_cod"];
		$estado_permi=$_POST["estado_permi"];
		$modulo_permi=$_POST["modulo_permi"];
		try {
			Gestion_permiso::Modificar($rol_cod, $modu_cod, $estado_permi, $modulo_permi);
			echo "Modifico con exito";
			} catch (Exception $e){
				echo $e;
			}

}
//header("location:../views/consulta.modulo.php");
?>
