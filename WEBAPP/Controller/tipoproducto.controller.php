<!-- Jeison V. Calle -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':
			$tipopro_cod=$_POST["txt_tipoprocod"];
			$tipopro_nombre=$_POST["txt_tipopronom"];
			$tipopro_desc=$_POST["txt_desctipopro"];
			try {
					Gestion_Tipoproducto::Guardar($tipopro_cod, $tipopro_nombre, $tipopro_desc);
					//$mensaje =("Su registro se creo correctamente");
					//echo $mensaje;
					$crt="c";
					header("location: ../Views/dashboard.php?seccion=r_t_producto&crt");
				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				// header("Location: ../View/guardar_producto.php?m=".$mensaje);
			break;
		case 'update':
         	$tipopro_cod=$_POST["txt_tipoprocod"];
			$tipopro_nombre=$_POST["txt_tipopronom"];
			$tipopro_desc=$_POST["txt_desctipopro"];
		$upt="u";

     		 try {
     		 	Gestion_Tipoproducto::Modificar($tipopro_cod, $tipopro_nombre, $tipopro_desc);
     		 	header("location: ../Views/dashboard.php?seccion=r_t_producto&upt");
     		 } catch (Exception $e) {
     		 	echo $e;
     		 }
   		break;
   		case 'delete':
           $tipopro_cod = $_GET["tipopro_cod"];


       		 try {
       		 	Gestion_Tipoproducto::Eliminar($tipopro_cod);
       		 	echo "Eliminó con exito";
       		 	header("location: ../Views/dashboard.php?seccion=r_t_producto");
       		 } catch (Exception $e) {
       		 	echo $e;
       		 }
     		break;
	}
	//header("Location: ../Views/consulta.tipoproducto.php");
?>
