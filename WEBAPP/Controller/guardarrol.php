<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");

$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		$codigo_rol=$_POST["txt_codrol"];
		$nombre_rol=$_POST["txt_nomrol"];
		$desc_rol=$_POST["txt_descrol"];
		try{
			Gestion_rol::Guardar($codigo_rol, $nombre_rol, $desc_rol);
			echo "Guardo con exito";
			echo "<a href='../Views/registro.rol.php'>Volver</a>";

		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Update':
		$rol_cod = $_POST["txt_codrol"];
		$rol_nombre = $_POST["txt_nomrol"];
		$desc_rol=$_POST["txt_descrol"];
		try{
			Gestion_rol::Modificar($rol_cod, $rol_nombre, $desc_rol);
			echo "Modifico con exito";
			echo "<a href='../Views/consulta.rol.php'>Volver</a>";
		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Borrar':
           $rol_cod = $_GET["rol_cod"];


    try {
       		 Gestion_rol::Eliminar($rol_cod);
       		 echo "Eliminó con exito";
       		 echo "<a href='../Views/registro.rol.php'>Volver</a>";
      	}catch (Exception $e){
       		 	echo $e;
       		 }
     	break;
}
header("location:../views/consulta.rol.php");
?>
