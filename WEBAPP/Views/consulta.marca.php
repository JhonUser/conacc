<?php
require_once("../Model/conexion.php");
require_once("../Model/marca.class.php");

$marca=Gestion_Marca::Cargar_marca();
?>
<html>
<head>
	<title>Consultar marca</title>
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
			<td>Codigo</td>
			<td>Nombre de marca</td>
			<td>Nombre de imagen</td>
			<td>Editar/Eliminar</td>
			
			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($marca as $consulta) {
				echo "<tr>
							<td>".$consulta["marca_cod"]."</td>
							<td>".$consulta["marca_nombre"]."</td>
							<td>".$consulta["marca_logo"]."</td>
							<td>
								<a href='modificar.marca.php?codigo_marca=".$consulta["marca_cod"]."'>
								<img src='images/modificar.png' height='20' width='20'/>
								<a href='../Controller/marca.controller.php?marca_cod=".$consulta["marca_cod"]."&accion=Borrar' ><img src='images/eliminar.png' height='20' width='20'/>
							</td>
					</tr>";
			}
		?>
	</tbody>
</table>
</body>
</html>