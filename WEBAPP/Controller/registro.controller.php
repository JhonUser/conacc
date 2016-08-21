<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action=$_REQUEST["action"];	
switch ($action) {
	case 'Guardar'://funcion para guardar usuario 9 lineas de abajo son para capturar los datos
		$seleccion=$_POST["seleccion"];
		//$codigo=$_POST["codigo"];
		$documento=$_POST["documento"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contrasena=$_POST["contrasena"];
		$cifrar=password_hash($contrasena,PASSWORD_DEFAULT);
		//$codigo,
		try{
			Gestion_usuario::Guardar($seleccion,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$cifrar);
			echo "Guardo con exito";

		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'Modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos
		$codigo=$_POST["codigo"];
		$documento=$_POST["documento"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contrasena=$_POST["contrasena"];
		$cifrar=password_hash($contrasena,PASSWORD_DEFAULT);

try{
			Gestion_usuario::Modificar($codigo,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$cifrar);
			header("location:../views/consulta.usuario.php");

		}catch(Exception $e){
			echo $e;
		}

		break;
}
?>
