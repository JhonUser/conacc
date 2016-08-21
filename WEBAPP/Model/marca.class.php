<?php
//marca.class.php
class Gestion_Marca{
	function Guardar($marca_cod, $marca_nombre, $marca_logo)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO marca (marca_cod, marca_nombre, marca_logo) VALUES (?,?,?)";

		$query = $pdo->prepare($sql);
		$query->execute(array($marca_cod, $marca_nombre, $marca_logo));

		Conexion::Cerrarbd();
	}
	function Cargar_marca(){
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM marca";
		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;
	}
}
?>