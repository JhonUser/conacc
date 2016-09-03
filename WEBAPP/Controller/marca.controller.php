<?php
//marca.controller.php

require_once("../Model/conexion.php");
require_once("../Model/marca.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':
		$directorio = "imagenes_marca/";

			$total_imagenes = count($_FILES["img_logomarca"]["name"]); for ($i=0; $i < $total_imagenes; $i++){
			//Aqui se captura el nombre del archivo original con su extension
			$archivo = basename($_FILES["img_logomarca"]["name"]);
			$extension_archivo = pathinfo($archivo, PATHINFO_EXTENSION);

			//Personalizar el nombre del archivo
			date_default_timezone_set('America/Bogota');
			$archivo = $directorio."imagen_".date("Ymd-His").rand().".".$extension_archivo;

					//Inicio de validaciones

					//Comprobar que el archivo si es una imagen

					 $check = getimagesize($_FILES["img_logomarca"]["tmp_name"]);
					if($check !== false){
						//Comprobamos que el archivo no exista
						if(file_exists($archivo)){
							echo "El archivo ya existe en el servidor.";
						}else{
							//Verificamos que el peso no supere lo permitido (1MB)
							if($_FILES["img_logomarca"]["size"] > 8388608){
								echo"El archivo no puede pesar mas de 1MB";
							}else{
								//Verficamos el tipo de archivo permitido (jpg, jpeg, png)
								if($extension_archivo != "jpg" && $extension_archivo != "jpeg" && $extension_archivo != "png" && $extension_archivo != "PNG"){
									echo "Solo se puede subir imagenes JPG o PNG";
								}else{
									//Pasar el tmp al directiorio y verificar que si suba correctamente
									if(move_uploaded_file($_FILES["img_logomarca"]["tmp_name"], $archivo)){
										//echo"La imagen se ha subido correctamente y tiene el nombre: ".basename($archivo);

									}else{
										echo "Ocurrio el siguiente error".$_FILES["img_logomarca"]["error"];
										echo "El archivo ". basename( $_FILES["img_logomarca"]["name"]). " se subio correctamente.  <br>";
										echo ( $_FILES["img"]["error"]);
									}
								}
							}
						}
					}
					else{
						echo "El archivo no es una imagen";
					}
					}


			
			$marca_nombre=$_POST["txt_nommarca"];

			try {
					Gestion_Marca::Guardar($marca_nombre, $_FILES["img_logomarca"]["name"]);
					$mensaje ="Su registro se creo correctamente";
					echo $mensaje;
				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				header("Location: ../Views/consulta.marca.php?m=".$mensaje);
			break;
	}
?>
