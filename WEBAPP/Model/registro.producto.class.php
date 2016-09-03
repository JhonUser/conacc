<!-- Jeison V. Calle -->
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

	function consultaP($codigo){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM registro_producto WHERE regi_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($codigo));

		$result = $query->fetch(PDO::FETCH_BOTH);
		return $result;

		Conexion::Cerrarbd();
	}

		function modificar($codigo_registro,$codigo_usu,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE registro_producto SET usu_cod = ?, produ_cod = ?,propie_cod=?,regi_serial=?,regi_color=?,regi_fecha=?,regi_desc=?,regi_autoalterna=? WHERE regi_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo_usu,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$codigo_registro));

			Conexion::Cerrarbd();
		}

		function eliminar($codigoA){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE from  registro_producto where regi_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigoA));

			Conexion::Cerrarbd();
		}

}






?>