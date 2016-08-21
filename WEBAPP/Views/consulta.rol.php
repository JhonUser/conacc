<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");


$rol =Gestion_rol::Consultar();


?>


<html>
<head>
	<title>Consultar rol</title>
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
			<td>Nombre del rol</td>
			<td>Descripcion</td>
			<td>Accion</td>
			
			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($rol as $consulta) {
				echo "<tr>
							<td>".$consulta["rol_cod"]."</td>
							<td>".$consulta["rol_nombre"]."</td>
							<td>".$consulta["rol_desc"]."</td>
							<td>
								<a href='modifico_rol.php?codigo_rol=".$consulta["rol_cod"]."'>modificar</a>
								<a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>
							</td>
					</tr>";
			}
		?>
	</tbody>
	<a href="registro.rol.php">Crear rol</a>
</table>
</body>
</html>