<?php
//marca.controller.php
require_once("../Model/conexion.php");
require_once("../Model/marca.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':

			$marca_cod=$_POST["txt_codmarca"];
			$marca_nombre=$_POST["txt_nommarca"];
			$marca_logo=$_POST["img_logomarca"];

			try {
					Gestion_Marca::Guardar($marca_cod, $marca_nombre, $marca_logo);
					$mensaje =("Su registro se creo correctamente");
					echo $mensaje;
				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				// header("Location: ../View/guardar_producto.php?m=".$mensaje);
			break;
	}
?>
