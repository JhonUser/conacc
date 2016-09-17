<!-- Jeison V. Calle -->
<?php
//producto.controller.php
require_once("../Model/conexion.php");
require_once("../Model/producto.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':
			//$produ_cod=$_POST["txt_codpro"];
			$tipopro_cod=$_POST["txt_tipopro"];
			$marca_cod=$_POST["txt_marcapro"];
			$desc_pro=$_POST["txt_descpro"];
			try {
					//Gestion_Producto::Guardar($tipopro_cod, $marca_cod, $desc_pro);
					$hola = new Gestion_Producto();
					$hola->Guardar($tipopro_cod, $marca_cod, $desc_pro);
					$mensaje =("Su registro se creo correctamente");
					echo $mensaje;
					header("Location: ../Views/dashboard.php?seccion=producto");

				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				// header("Location: ../View/guardar_producto.php?m=".$mensaje);
			break;
		case 'Update':
			$produ_cod=$_POST["txt_codpro"];
			$tipopro_cod=$_POST["txt_tipopro"];
			$marca_cod=$_POST["txt_marcapro"];
			$desc_pro=$_POST["txt_descpro"];
			try {
					//Gestion_Producto::Modificar($produ_cod, $tipopro_cod, $marca_cod, $desc_pro);
					$hola = new Gestion_Producto();
					$hola->Modificar($produ_cod, $tipopro_cod, $marca_cod, $desc_pro);
					$mensaje =("Modifico con exito");
					echo $mensaje;
					header("Location: ../Views/dashboard.php?seccion=producto");

				}
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				// header("Location: ../View/guardar_producto.php?m=".$mensaje);
			break;
		case 'Borrar':
           $produ_cod = $_GET["codigo_pro"];


    try {
       		 Gestion_Producto::Eliminar($produ_cod);
       		 echo "Eliminó con exito";
       		 header("Location: ../Views/dashboard.php?seccion=producto");
       		 
      	}catch (Exception $e){
       		 	echo $e;
       		 }
     	break;
}		
	//header("location: ../Views/dashboard.php?seccion=producto");
?>
