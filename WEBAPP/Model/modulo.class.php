<?php
Class Gestion_modulo
{
		private static $sql;
		private static $query;
		private static $result;
	function Guardar($modu_cod, $modu_nom)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		self::$sql="INSERT INTO modulo(modu_cod, modu_nom) values(?,?)";
		self::$query=$pdo->prepare(self::$sql);
		self::$query->execute(array($modu_cod, $modu_nom));

		Conexion::Cerrarbd();
		return self::$result;
	}
	function Consulta()
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		self::$sql = "SELECT * FROM modulo";
		self::$query= $pdo->prepare(self::$sql);
		self::$query->execute();

		self::$result = self::$query->fetchAll(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return self::$result;
	}
	//Cuando no de el modificar un solo campo a modificar, se puede hacer lo de la sentencia sql
	function Modificar($modu_cod, $modu_nom)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		self::$sql = "UPDATE modulo SET modu_nom = '".$modu_nom."' WHERE modu_cod = $modu_cod";
		self::$query= $pdo->prepare(self::$sql);
		self::$query->execute();
		//, $modu_cod
		Conexion::Cerrarbd();
	}
	function Consultarporcodigo($codigo)
	{
		$pdo=Conexion::Abrirbd($codigo);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		self::$sql="SELECT * FROM modulo WHERE modu_cod= ?";
		self::$query=$pdo->prepare(self::$sql);
		self::$query->execute(array($codigo));
		self::$result=self::$query->fetch(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();

		return self::$result;
	}
	public static function Eliminar($codigo_modu)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$sql= "DELETE  FROM modulo Where modu_cod = ?";
		self::$query= $pdo->prepare(self::$sql);
		self::$query->execute(array($codigo_modu));

		Conexion::Cerrarbd();
	}
	//Funcion para traer el codigo del modulo
	function Codigo()
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		self::$sql = "SELECT modu_cod FROM modulo";
		self::$query= $pdo->prepare(self::$sql);
		self::$query->execute();

		self::$result = self::$query->fetchAll(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return self::$result;
	}
}
?>
