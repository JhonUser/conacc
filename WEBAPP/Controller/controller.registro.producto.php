<!-- Jeison V. Calle -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/registro.producto.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar':
	$codigo=$_POST["codigo"];
	$codigo_pro=$_POST["codigo_pro"];
	$codigo_propiedad=$_POST["codigo_propiedad"];
	$registro_serial=$_POST["registro_serial"];
	$registre_color=$_POST["registre_color"];
	$registre_fecha=$_POST["registre_fecha"];
	$registre_decrip=$_POST["registre_decrip"];
	$registre_autoalerta=$_POST["registre_autoalerta"];

	try{

		Gestion_producto::Guardar($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta);
		echo "<a href='../Views/registro.registro_producto.php'>Volver</a>";
	}catch(Exception $e){
		echo $e;
	}
	echo"<script>alert('guardo con exito'); </script>";
		break;

		case 'modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos

	$codigo_registro=$_POST["codigo_regi"];
	$codigo_usu=$_POST["codigo_usu"];
	$codigo_pro=$_POST["produ_cod"];
	$codigo_propiedad=$_POST["propie_cod"];
	$registro_serial=$_POST["regi_serial"];
	$registre_color=$_POST["regi_color"];
	$registre_fecha=$_POST["regi_fecha"];
	$registre_decrip=$_POST["regi_desc"];
	$registre_autoalerta=$_POST["regi_autoalterna"];

try{
			Gestion_producto::modificar($codigo_registro,$codigo_usu,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta);
			header("location:../views/consulta.registro_producto.php");

		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'eliminar':
		$codigoA=$_GET["codigo_produc"];

		try{
			Gestion_producto::eliminar($codigoA);
			echo "<script>alert('elimino con exito');</script>";
			echo "<a href='../Views/consulta.registro_producto.php'>Volver</a>";
		}catch(Exception $e){

			echo $e;
		}


		break;



}


?>
