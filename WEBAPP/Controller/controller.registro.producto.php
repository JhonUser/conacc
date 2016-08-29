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
}


?>