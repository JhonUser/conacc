<!-- Jeison V. Calle -->
<?php
//marca.class.php
class Gestion_Marca{
	function Guardar($marca_nombre, $marca_logo)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO marca (marca_nombre, marca_logo) VALUES (?,?)";

		$query = $pdo->prepare($sql);
		$query->execute(array($marca_nombre, $marca_logo));

		Conexion::Cerrarbd();
	}
	function Modificar($marca_nombre, $marca_logo)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE marca SET marca_nombre = ?, marca_logo = ? WHERE marca_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($marca_nombre, $marca_logo));
			Conexion::Cerrarbd();
			
		}
	function Eliminar($codigo_marca)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql= "DELETE  FROM marca Where marca_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo_marca));

			Conexion::Cerrarbd();
		}
	function Cargar_marca(){
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM marca";
		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;
	}
	function Consuta_codigo($codigo){
		$pdo=Conexion::Abrirbd($codigo);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM marca WHERE marca_cod= ?";
		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));
		$result=$query->fetch(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();

		return $result;
	}
	function Subir(){
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

	}
}
?>
