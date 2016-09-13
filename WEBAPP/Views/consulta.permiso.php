<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");
require_once("../Model/permiso.class.php");
$rol=Gestion_permiso::Consultar_nombres();
$modulo=Gestion_permiso::Cargar_modulo();
?>


<html>
<head>
	<title>Consultar permisos</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
   		 $('#myTable').DataTable();
	});
	</script>
</head>
<body>
<table id="myTable">
	<thead>
		<tr>
			<td>Nombre del rol</td>
			<td>Nombre del modulo</td>
			<td>Estado del permiso</td>
			<td>Accion</td>


			</tr>
	</thead>
	<tbody>
	<!--Por si se quiere poner el rol_cod y elmodu_cod en la tabla = <td>".$consulta["rol_cod"]." </td> <td>".$consulta["modu_cod"]."</td>-->
		<?php
			foreach ($rol as $consulta) {
				echo "<tr>
							<td>".$consulta["rol_nombre"]."</td>
							<td>".$consulta["modu_nom"]."</td>
							<td>".$consulta["estado_permi"]."</td>

							<td>
								<a href='modifico_permiso.php?codigo_permi=".$consulta["modu_cod"]."'>Modificar</a>

							</td>


					</tr>";
			}
		?>

	</tbody>
	<a href="Registro.permiso.php">Crear permiso</a>
</table>
</body>
</html>
