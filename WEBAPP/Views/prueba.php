
<?php
require_once '../Model/conexion.php';
require_once '../Model/rol.class.php';

$pacomparar=Gestion_rol::Consultar();
$codigo=$_POST["cod"];


foreach ($pacomparar as $key) {
			if($key['rol_cod']===$codigo){
				echo "Nro ".$key['rol_cod']." no puede usarse para codigo";
				break;
			}				
	}
			if($key['rol_cod']!==$codigo){
				echo "Uselo";
			}

// if($codigo =="1234"){
// 	echo "Ojala de";

// }
?>
