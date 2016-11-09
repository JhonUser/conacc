<!-- Andrea T. Villegas -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action= $_REQUEST["action"];
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
		$estado="Activo";
		//$codigo,
		try{
			Gestion_usuario::Guardar($seleccion,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$cifrar,$estado);
			$crt="c";
			header("location: ../Views/dashboard.php?seccion=usuario&crt");
			echo "Guardo con exito";

		}catch(Exception $e){
			echo $e;
			$e= 23000;
			header("location: ../Views/dashboard.php?seccion=usuario&e");
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


try{
			Gestion_usuario::Modificar($codigo,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario);
			$upt="u";
		header("location: ../Views/dashboard.php?seccion=usuario&upt");

		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'estado':
			$estado="Inactivo";
			$codigo=$_GET["codigo_usuario"];


			try{
				Gestion_usuario::Estado($estado,$codigo);
				header("location: ../Views/dashboard.php?seccion=usuario");

			}catch(Exception $e){
				echo $e;
			}
		break;

		case 'activo':
			$estado="Activo";
			$codigo=$_GET["codigo_usuario"];


			try{
				Gestion_usuario::activo1($estado,$codigo);
				header("location: ../Views/dashboard.php?seccion=usuario");

			}catch(Exception $e){
				echo $e;
			}
		break;
}
?>
