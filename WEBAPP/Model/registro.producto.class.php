<!-- Andrea taborda -->
<?php

class Gestion_producto{

	function guardar($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$fecha,$hora){
	$pdo=conexion::Abrirbd();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// $sql2="SELECT prop_cod from propietario where prop_doc = ?";
	// $query=$pdo->prepare($sql2);
	// $query->execute(array($codigo_propiedad));
	// $result2=$query->rowCount();
	// $codigo_propie=$result2;

	$sql="INSERT INTO registro_producto (usu_cod,produ_cod,prop_cod,regi_serial,regi_color,regi_fecha,regi_desc,regi_autoalterna) values(?,?,?,?,?,?,?,?)";

	$query=$pdo->prepare($sql);
	$query->execute(array($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta));

//consultar entrada y salir

	$sql1="SELECT max(regi_cod) FROM registro_producto";
	$query=$pdo->prepare($sql1);
	$query->execute();
	$result1=$query->fetch(PDO::FETCH_BOTH);
	$codigo=$result1[0];


	$sql2="INSERT INTO entrada_salida (regi_cod,entsal_fechaent,entsal_fechasal,entsal_horaent,entsal_horasal) values(?,?,?,?,?)";

	$query1=$pdo->prepare($sql2);
	$query1->execute(array($codigo,$fecha,"",$hora,""));


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

		$sql="SELECT producto.produ_cod, producto.marca_cod, marca.marca_nombre, producto.tipopro_cod, tipo_producto.tipopro_nombre, producto.produ_desc from producto inner join marca on producto.marca_cod = marca.marca_cod inner JOIN tipo_producto on producto.tipopro_cod= tipo_producto.tipopro_cod ";
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

		$sql="SELECT registro_producto.regi_cod, registro_producto.usu_cod, usuario.usu_docu, registro_producto.produ_cod, producto.produ_desc, registro_producto.prop_cod, propietario.prop_doc, registro_producto.regi_serial, registro_producto.regi_color, registro_producto.regi_fecha, registro_producto.regi_desc, marca.marca_nombre, tipo_producto.tipopro_nombre, registro_producto.regi_autoalterna
			from registro_producto inner join usuario on registro_producto.usu_cod = usuario.usu_cod inner join producto on registro_producto.produ_cod = producto.produ_cod inner join propietario on propietario.prop_cod = registro_producto.prop_cod inner join marca on producto.marca_cod = marca.marca_cod inner JOIN tipo_producto on producto.tipopro_cod= tipo_producto.tipopro_cod
            ";
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
	function consultarced($cedu){
		$pdo=conexion::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT registro_producto.regi_cod, propietario.prop_doc, propietario.prop_nom, propietario.prop_ape, propietario.prop_cod, registro_producto.produ_cod, registro_producto.regi_serial, registro_producto.regi_desc, entrada_salida.entsal_cod, entrada_salida.entsal_fechaent, entrada_salida.entsal_fechasal, entrada_salida.entsal_horaent, entrada_salida.entsal_horasal from entrada_salida inner join registro_producto on registro_producto.regi_cod=entrada_salida.regi_cod inner join propietario on registro_producto.prop_cod=propietario.prop_cod where prop_doc = ?";
		$query=$pdo->prepare($sql);
		$query->execute(array($cedu));
		$result=$query->fetchALL(PDO::FETCH_BOTH);
		return $result;
		Conexion::Cerrarbd();

	}
	// function consultaporced($cedula){
	// 	$pdo = Conexion::Abrirbd();
	// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// 	$sql = "SELECT propietario.prop_nom, propietario.prop_ape, propietario.prop_cod, registro_producto.produ_cod, registro_producto.regi_serial, entrada_salida.entsal_cod, entrada_salida.entsal_fechaent, entrada_salida.entsal_fechasal, entrada_salida.entsal_horaent, entrada_salida.entsal_horasal from entrada_salida inner join registro_producto on registro_producto.regi_cod=entrada_salida.regi_cod inner join propietario on registro_producto.prop_cod=propietario.prop_cod and prop_doc = 123";
	// 	$query= $pdo->prepare($sql);
	// 	$query->execute(array($cedula));

	// 	$result = $query->fetch(PDO::FETCH_BOTH);
	// 	return $result;

	// 	Conexion::Cerrarbd();

	// }
		function modificar($codigo_registro,$codigo_pro,$registro_serial,$registre_color,$registre_decrip,$registre_autoalerta){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE registro_producto SET produ_cod = ?, regi_serial=?  , regi_color= ? , regi_desc= ?, regi_autoalterna= ? WHERE regi_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo_pro,$registro_serial,$registre_color,$registre_decrip,$registre_autoalerta,$codigo_registro));

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

		function consultarEntrada(){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM entrada_salida";
		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query->fetchALL(PDO::FETCH_BOTH);
		return $result;

		Conexion::Cerrarbd();
	}

	function entrada_salida($codigo,$fecha,$hora){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE entrada_salida SET entsal_fechasal = ?, entsal_horasal = ? WHERE entsal_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($fecha,$hora,$codigo));

			Conexion::Cerrarbd();
		}

}






?>
