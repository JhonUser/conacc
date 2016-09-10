<!-- Jeison V. Calle -->
<?php
//producto.class.php
class Gestion_Producto{
	function Guardar($tipopro_cod, $marca_cod, $desc_pro)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO producto (tipopro_cod, marca_cod, produ_desc) VALUES (?,?,?)";

		$query = $pdo->prepare($sql);
		$query->execute(array($tipopro_cod, $marca_cod, $desc_pro));

		Conexion::Cerrarbd();
	}
}
?>
