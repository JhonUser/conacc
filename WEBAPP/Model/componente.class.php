<!-- Andrea taborda -->
<?php

class Gestion_componente{
	
	function Guardar ($nombre,$cantidad){
	$pdo=conexion::AbrirBD();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="INSERT INTO componente(compo_nombre,compo_cant) values (?,?)";
	$query=$pdo->prepare($sql);
	$query->execute(array($nombre,$cantidad));

	conexion::CerrarBD();
	
	}	

	function consultar (){
		$pdo=conexion::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM componente";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		
		return $result;
	}

	function consultaC($codigo){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM componente WHERE compo_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($codigo));

		$result = $query->fetch(PDO::FETCH_BOTH);
		return $result;
		
		Conexion::Cerrarbd();
		}

		function modificar($codigo,$nombre,$cantidad){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE componente SET compo_nombre = ?, compo_cant = ? WHERE compo_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($nombre,$cantidad,$codigo));

			Conexion::Cerrarbd();
		}

		function eliminar($codigo){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE from  componente where compo_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));

			Conexion::Cerrarbd();
		}



}

?>