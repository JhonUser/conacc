
<?php
require_once '../Model/conexion.php';
require_once '../Model/rol.class.php';
require_once '../Model/producto.class.php';
$modulo=$_POST["mdl"];
if($modulo=="rol"){
	$pacomparar=Gestion_rol::consultarRol($_POST["name"]);
	foreach ($pacomparar as $consulta)
	{
		echo "<tr>
				<td>".$consulta["rol_cod"]."</td>
				<td>".$consulta["rol_nombre"]."</td>
				<td>".$consulta["rol_desc"]."</td>
				<td>
					<a href='dashboard.php?seccion=m_rol&codigo_rol=".$consulta["rol_cod"]."'class='btn-floating light-green'>
						<i class='material-icons'>edit</i>
					</a>
					<a onclick='d(".$consulta["rol_cod"].")' class='btn-floating red'>
						<i class='material-icons'>delete_forever</i>
					</a>
				</td>
			</tr>";
		}	
}
if($modulo=="producto"){
	$pacomparar1=Gestion_Producto::consultarProdu($_POST["name1"]);
	foreach ($pacomparar1 as $consulta) {
		echo "<tr>
				<td>".$consulta["marca_nombre"]."</td>
				<td>".$consulta["tipopro_nombre"]."</td>
				<td>".$consulta["produ_desc"]."</td>
				<td>
					<a href='dashboard.php?seccion=m_producto&codigo_pro=".$consulta["produ_cod"]."'class='btn-floating light-green'>
						<i class='material-icons'>edit</i>
					</a>
					<a onclick='d(".$consulta["produ_cod"].")' class='btn-floating red'>
						<i class='material-icons'>delete_forever</i>
					</a>
			</tr>";
	}
}



?>
