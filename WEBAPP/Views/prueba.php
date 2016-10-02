
<?php
require_once '../Model/conexion.php';
require_once '../Model/rol.class.php';
require_once("../Model/modulo.class.php");
$mdl=$_REQUEST["mod"];

// switch ($mdl) {
	
// 	case 'rol':
// 	try{
// 		$pacomparar=Gestion_modulo::Consulta();
// 	
$codigo=$_POST["cod"];
// 			foreach ($pacomparar as $key){
// 				if($key['modu_cod']===$codigo){
// 					echo "Nro ".$key['modu_cod']." no puede usarse para codigo";
// 					break;
// 				}				
// 			}
// 				if($key['modu_cod']!==$codigo){
// 					echo "Uselo";
// 				}
// 		}
// 		catch(Exception $e){
// 			echo $e;
// 		}

// // if($codigo =="1234"){
// // 	echo "Ojala de";

// // } code...
// 		break;

// 	case 'rol':
// 	try{
// 		$pacomparar=Gestion_rol::Consultar();
// 		$codigo=$_POST["cod"];
// 			foreach ($pacomparar as $key){
// 				if($key['rol_cod']===$codigo){
// 					echo "Nro ".$key['rol_cod']." no puede usarse para codigo";
// 					break;
// 				}				
// 			}
// 				if($key['rol_cod']!==$codigo){
// 					echo "Uselo";
// 				}
// 		}
// 		catch(Exception $e){
// 			echo $e;
// 		}

if($codigo =="1234"){
	echo $mdl;

// } code...
		//break;

}

?>
