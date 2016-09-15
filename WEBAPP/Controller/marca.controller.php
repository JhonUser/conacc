<!-- Jeison V. Calle -->

<?php
//marca.controller.php


require_once("../Model/conexion.php");
require_once("../Model/marca.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':
			$marca_nombre=$_POST["txt_nommarca"];
			try {
					Gestion_Marca::Subir($_FILES["img_logomarca"]["name"]);
					Gestion_Marca::Guardar($marca_nombre, $_FILES["img_logomarca"]["name"]);
					$mensaje ="Su registro se creo correctamente";
					echo $mensaje;
				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				//header("Location: ../Views/consulta.marca.php?m=".$mensaje);
			break;

		case 'Update':
		$marca_cod=$_POST["txt_codmarca"];
		$marca_nombre=$_POST["txt_nommarca"];

			try {
					Gestion_Marca::Subir($_FILES["img_logomarca"]["name"]);
					Gestion_Marca::Modificar($marca_cod, $marca_nombre, $_FILES["img_logomarca"]["name"]);
					$mensaje ="Su registro se creo correctamente";
					echo $mensaje;
				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				//header("Location: ../Views/consulta.marca.php?m=".$mensaje);
			break;

		case 'Borrar':
		$marca_cod = $_GET["marca_cod"];


    		try {
	       		 Gestion_Marca::Eliminar($marca_cod);
	       		 echo "Eliminó con exito";
	       		 echo "<a href='../Views/registro.rol.php'>Volver</a>";
      		}catch (Exception $e){
       		 		echo $e;
       		}
     	break;

	}
	header("location:../Views/dashboard.php?seccion=r_marca");
?>
