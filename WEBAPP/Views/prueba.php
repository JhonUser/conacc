
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
 			
			if($key['marca_cod']!=$codigo){
				echo "No puede ingresar ese codigo";

			}

			else{
				echo "Puede ingresar ese codigo";
			}
			break;
			
		}
		

// if($codigo =="1234"){
// 	echo "Ojala de";

// }
?>