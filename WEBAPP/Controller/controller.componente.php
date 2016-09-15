<!-- Andrea T. Villegas -->
<?php
require_once("../model/conexion.php");
require_once("../model/componente.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
	case 'guardar':

		$nombre=$_POST["nombre"];
		$cantidad=$_POST["cantidad"];

		try{
			Gestion_componente::guardar($nombre,$cantidad);
			echo "<a href='../Views/dashboard.php?seccion=r_componente'>Volver</a>";
		}catch(Exception $e){

			echo $e;
		}
echo"<script>alert('guardo con exito'); </script>";

		break;

	case 'Update':

		$codigoCompo=$_POST["codigo_compo"];
		$nombreCompo=$_POST["nombre_compo"];
		$cantidadCompo=$_POST["cantidad_compo"];


		try{
			Gestion_componente::modificar($codigoCompo,$nombreCompo,$cantidadCompo);
			echo "modifico con exito";
		}catch(Exception $e){

			echo $e;
		}


		break;

		case 'eliminar':
		$codigoC=$_GET["compo_codi"];

		try{
			Gestion_componente::eliminar($codigoC);
			echo "<script>alert('elimino con exito');</script>";
			 echo "<a href='../Views/consulta.componente.php'>Volver</a>";
		}catch(Exception $e){

			echo $e;
		}


		break;

}



?>
