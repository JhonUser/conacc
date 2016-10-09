<!-- Jeison V. Calle -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");		
date_default_timezone_set('America/Bogota');

$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		session_start();
		$codigo_rol=$_POST["txt_codrol"];
		$nombre_rol=$_POST["txt_nomrol"];
		$desc_rol=$_POST["txt_descrol"];
		$usu= $_SESSION["codigo"];
		$segui_modulo="roles";
		$segui_accion="guardar";
		$fecha = date("m.d.y");
		$hora = date("H:i:s");
		try{
			Gestion_rol::Guardar($codigo_rol, $nombre_rol, $desc_rol);
			Gestion_rol::Seguir($usu, $segui_modulo, $segui_accion, $fecha, $hora);
			$crt="c";
			header("location: ../Views/dashboard.php?seccion=rol&crt");

		}catch(Exception $e){
			$e= $e->getCode();
			header("location: ../Views/dashboard.php?seccion=rol&e");
		}

		break;
	case 'Update':
		$rol_cod = $_POST["txt_codrol"];
		$rol_nombre = $_POST["txt_nomrol"];
		$desc_rol=$_POST["txt_descrol"];
		$upt="u";

		try{
			Gestion_rol::Modificar($rol_cod, $rol_nombre, $desc_rol);
			header("location: ../Views/dashboard.php?seccion=rol&upt");
		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Borrar':
           $rol_cod = $_GET["rol_cod"];


    try {
       		 Gestion_rol::Eliminar($rol_cod);
       		 echo "Eliminó con exito";
       		 header("location: ../Views/dashboard.php?seccion=rol");
      	}catch (Exception $e){
       		 	echo $e;
       		 }
     	break;
    case 'concod':
    	$pacomparar =Gestion_rol::Consultar();
		$codigo=$_POST["cod"];
			foreach ($pacomparar as $key){
				if($key['rol_cod']===$codigo){
					echo "Nro ".$key['rol_cod']." no puede usarse para codigo";
					break;
				}				
			}
				if($key['rol_cod']!==$codigo){
					echo "Uselo";
				}
		break;
}
//header("location:../views/consulta.rol.php");
?>
