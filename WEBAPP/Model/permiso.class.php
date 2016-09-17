<?php
class Gestion_permiso{
		private static $sql;
		private static $query;
		private static $result;

	public static function Cargar_modulo(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		self::$sql="SELECT * FROM modulo";

		self::$query=$pdo->prepare(self::$sql);
		self::$query->execute();
		self::$result=self::$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return self::$result;
	}
	public static function Guardar($rol_cod, $modu_cod, $estado_permi, $modulo_permi){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		self::$sql="INSERT INTO permiso(rol_cod, modu_cod, estado_permi, modulo_permi) values(?,?,?,?)";

		self::$query=$pdo->prepare(self::$sql);
		self::$query->execute(array($rol_cod, $modu_cod, $estado_permi, $modulo_permi));

		Conexion::Cerrarbd();

	}

	public static function Cosultar_modulo(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		self::$sql="SELECT * FROM permiso";

		self::$query=$pdo->prepare(self::$sql);
		self::$query->execute();
		self::$result=self::$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return self::$result;

	}
	public static function Consultar_nombres(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		self::$sql="SELECT permiso.rol_cod, rol.rol_nombre, permiso.permi_cod, permiso.estado_permi, permiso.modu_cod, modulo.modu_nom FROM permiso INNER JOIN modulo ON modulo.modu_cod = permiso.modu_cod INNER JOIN rol ON rol.rol_cod = permiso.rol_cod";

		self::$query=$pdo->prepare(self::$sql);
		self::$query->execute();
		self::$result=self::$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return self::$result;

	}
	function Consultarporcodigo($codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM permiso WHERE permi_cod=?";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));

		$result=$query->fetch(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();

		return $result;
	}
	public static function Modificar($permi_cod,$rol_cod, $modu_cod, $estado_permi, $modulo_permi)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			self::$sql = "UPDATE permiso SET rol_cod = ?, modu_cod = ?, estado_permi = ?, modulo_permi = ? WHERE permi_cod = ?";
			self::$query= $pdo->prepare(self::$sql);
			self::$query->execute(array($rol_cod, $modu_cod, $estado_permi, $modulo_permi, $permi_cod));
			Conexion::Cerrarbd();
		}
	public static function Eliminar($codigo_permi)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			self::$sql = "DELETE FROM permiso WHERE permi_cod = ?";
			self::$query= $pdo->prepare(self::$sql);
			self::$query->execute(array($codigo_permi));
			Conexion::Cerrarbd();
		}
}
?>
