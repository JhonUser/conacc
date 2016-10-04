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
	function Consultar(){
			$pdo= Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql="SELECT producto.produ_cod, producto.marca_cod, marca.marca_nombre, producto.tipopro_cod, tipo_producto.tipopro_nombre, producto.produ_desc from producto inner join marca on producto.marca_cod=marca.marca_cod 
					inner join tipo_producto on producto.tipopro_cod=tipo_producto.tipopro_cod";

			$query=$pdo->prepare($sql);
			$query->execute();
			$result=$query->fetchALL(PDO::FETCH_BOTH);

			Conexion::Cerrarbd();
			return $result;
		}
	function Consultarporcodigo($codigo){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "SELECT * FROM producto WHERE produ_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));

			$result = $query->fetch(PDO::FETCH_BOTH);
			return $result;
			Conexion::Cerrarbd();
		}
	function Modificar($produ_cod, $tipopro_cod, $marca_cod, $desc_pro)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$sql = "UPDATE producto SET tipopro_cod = ?, marca_cod = ?, produ_desc = ? WHERE produ_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($tipopro_cod, $marca_cod, $desc_pro, $produ_cod));
			
			Conexion::Cerrarbd();
		}
	function Eliminar($codigoA){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE from  producto where produ_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigoA));

			Conexion::Cerrarbd();
		}	
	function consultarProdu($nombre){
			$pdo= Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql="SELECT producto.produ_cod, producto.marca_cod, marca.marca_nombre, producto.tipopro_cod, tipo_producto.tipopro_nombre, producto.produ_desc from producto inner join marca on producto.marca_cod=marca.marca_cod inner join tipo_producto on producto.tipopro_cod=tipo_producto.tipopro_cod where produ_desc like CONCAT ('%',?,'%')";

			$query=$pdo->prepare($sql);
			$query->execute(array($nombre));
			$result=$query->fetchALL(PDO::FETCH_BOTH);

			Conexion::Cerrarbd();
			return $result;
	}
		
}
?>
