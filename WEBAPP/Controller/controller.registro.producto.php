<!-- Andrea taborda -->
<?php
session_start();
require_once("../Model/conexion.php");
require_once("../Model/registro.producto.class.php");
date_default_timezone_set('America/Bogota');

$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar':
	$codigo= $_SESSION["codigo"];
	$codigo_pro=$_POST["codigo_pro"];
	$codigo_propiedad=$_POST["codigo_propietario"];
	$registro_serial=$_POST["registro_serial"];
	$registre_color=$_POST["registre_color"];
	$registre_fecha = date("o-m-d");
	$registre_decrip=$_POST["registre_decrip"];
	$registre_autoalerta=$_POST["registre_autoalerta"];
	$fecha=date("o-m-d");
	$hora=date("H:i");
	$crt="c";
	try{

		Gestion_producto::Guardar($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$fecha,$hora);
		//echo "<a href='../Views/dashboard.php?seccion=rr_producto&crt'>Volver</a>";
		header("location:../Views/dashboard.php?seccion=rr_producto&crt");
	}catch(Exception $e){
		$e= $e->getCode();
			header("location:../Views/dashboard.php?seccion=rr_producto&e");
	}
	//echo"<script>alert('guardo con exito'); </script>";
		break;

		case 'modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos

	$codigo_registro=$_POST["codigo_regi"];
	$codigo_pro=$_POST["codigo_pro"];
	$registro_serial=$_POST["registro_serial"];
	$registre_color=$_POST["registre_color"];
	$registre_decrip=$_POST["registre_decrip"];
	$registre_autoalerta=$_POST["registre_autoalerta"];
	$upt="u";

try{
			Gestion_producto::modificar($codigo_registro,$codigo_pro,$registro_serial,$registre_color,$registre_decrip,$registre_autoalerta);
			header("location:../Views/dashboard.php?seccion=rr_producto&upt");

		}catch(Exception $e){
			echo $e;
			$e= $e->getCode();
				header("location:../Views/dashboard.php?seccion=rr_producto&e");
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


	case 'salidae':

		$codigo=$_GET["salidas"];
		$fecha=date("o-m-d");
		$hora=date("H:i");
		try{
			Gestion_producto::entrada_salida($codigo,$fecha,$hora);
			header("location: ../Views/dashboard.php?seccion=c_entrada");

		}catch(Exception $e){
			echo $e;
		}

	break;
	case 'salidaced':

		$codigo=$_GET["salidasced"];
		$fecha=date("o-m-d");
		$hora=date("H:i");
		try{
			Gestion_producto::entrada_salida($codigo,$fecha,$hora);
			$act="ac";
			header("location: ../Views/dashboard.php?seccion=c_entrada&act");

		}catch(Exception $e){
			echo $e;
		}

	break;



}


?>
