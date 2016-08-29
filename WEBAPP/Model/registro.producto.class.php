<?php

class Gestion_producto{

	function guardar($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta){
	$pdo=conexion::Abrirbd();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$sql="INSERT INTO registro_producto (usu_cod,produ_cod,propie_cod,regi_serial,regi_color,regi_fecha,regi_desc,regi_autoalterna) values(?,?,?,?,?,?,?,?)";

	$query=$pdo->prepare($sql);
	$query->execute(array($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta));

	conexion::Cerrarbd();
}
	function consultarUsu(){
		$pdo=conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		return $result;
		conexion::Cerrarbd();
	}

function consultarprodu(){
	$pdo=conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM producto";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		return $result;
		conexion::Cerrarbd();
}
	function consultarpropie(){
		$pdo=conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM propietario";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		return $result;
		conexion::Cerrarbd();
	}
function consultar(){
		$pdo=conexion::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM registro_producto";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		
		return $result;
	}

	function consultarP($codigoP){
		$pdo=conexion::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM registro_producto where regi_cod=?";
		$query=$pdo->prepare($sql);
		$query->execute(array($codigoP));

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		
		return $result;
	}

		function modificar($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE registro_producto SET usu_cod = ?, produ_cod = ?,propie_cod=?,regi_serial=?,regi_color=?,regi_fecha=?,regi_desc=?,regi_autoalterna WHERE rei_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta));

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