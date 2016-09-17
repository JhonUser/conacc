
<?php
require_once '../Model/conexion.php';

class Intento{
	function Consul_cod(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT marca_cod FROM marca";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;
	}
}


$pacomparar=Intento::Consul_cod();
$codigo=$_POST["cod"];

foreach ($pacomparar as $key) {
			if($key['marca_cod']===$codigo){
				echo "Nro ".$key['marca_cod']." no puede usarse para codigo";
				break;
			}					
	}
			if($key['marca_cod']!==$codigo){
				echo "Uselo";
			}
// if($codigo =="1234"){
// 	echo "Ojala de";

// }
?>
<!DOCTYPE html>
<html>
<head>
	
<head>
	<title></title>
	<script src="script/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
<script type="text/javascript">
	function funcion(){
		swal("De");
	}
	</script>
</head>
<body>
<button onclick="funcion()">Try</button>
</body>
</html>