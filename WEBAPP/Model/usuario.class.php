<!-- Andrea T. Villegas -->
<?php
//se guarda en la base de datos
class Gestion_usuario{
	function Guardar($selecion,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$cifrar,$estado){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO usuario(rol_cod, usu_nom, usu_ape, usu_email,usu_tel,usu_nick, usu_pass, usu_docu, usu_estado) values(?,?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($selecion,$nombre,$apellido,$email,$telefono,$nombredeusuario,$cifrar,$documento,$estado));

		Conexion::Cerrarbd();

	}//se modifica en la base de datos

	function Modificar($codigo,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  usuario set usu_docu=?, usu_nom=?,usu_ape=?,usu_email=?,usu_tel=?,usu_nick=? WHERE usu_cod=? ";
		$query=$pdo->prepare($sql);
		$query->execute(array($documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$codigo));

		Conexion::Cerrarbd();

	}//se consulta en la base de datos

	function consultar_usuario(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}//se consulta por codigo en la base de datos
		function Consultarusuariocodigo($codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario WHERE usu_cod=?";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));

		$result=$query->fetch(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();

		return $result;
	}


function cargar_rol(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM rol";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}

function Estado($estado,$codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  usuario set usu_estado=? WHERE usu_cod=? ";
		$query=$pdo->prepare($sql);
		$query->execute(array($estado,$codigo));

		Conexion::Cerrarbd();

	}//se consulta en la base de datos

function activo1($estado,$codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  usuario set usu_estado=? WHERE usu_cod=? ";
		$query=$pdo->prepare($sql);
		$query->execute(array($estado,$codigo));

		Conexion::Cerrarbd();

	}
}

?>
