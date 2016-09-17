<!-- Jeison V. Calle -->
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
			header("location:../Views/dashboard.php?seccion=r_permiso&c=c");
		}catch (Exception $e){
			echo $e;
		}
		break;
	case 'Modificar':
		$permi_cod=$_POST["permi_cod"];
		$rol_cod=$_POST["sele_rol"];
		$modu_cod=$_POST["sele_modu"];
		$estado_permi=$_POST["estado_permi"];
		$modulo_permi=$_POST["modulo_permi"];
		try {
			Gestion_permiso::Modificar($permi_cod, $rol_cod, $modu_cod, $estado_permi, $modulo_permi);
			echo "Modifico con exito";
			header("location:../Views/dashboard.php?seccion=r_permiso&u=u");
			} catch (Exception $e){
				echo $e;
			}
			break;
	case 'Borrar':
		$permi_cod=$_GET["codigo_permi"];
		try {
			Gestion_permiso::Eliminar($permi_cod);
			echo "Elimino con exito";
			header("location:../Views/dashboard.php?seccion=r_permiso&d=d");
			} catch (Exception $e){
				echo $e;
			}
			break;
}

?>
