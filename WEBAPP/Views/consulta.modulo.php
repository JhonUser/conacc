<?php
require_once("../Model/conexion.php");
require_once("../Model/modulo.class.php");

$modu=Gestion_modulo::Consulta();
?>
<html>
<head>
	<title>Consultar modulo</title>
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
			<td>Nombre del modulo</td>
			<td>Accion</td>
			
			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($modu as $consulta) {
				echo "<tr>
							<td>".$consulta["modu_cod"]."</td>
							<td>".$consulta["modu_nom"]."</td>
							<td>
								<a href='modifico_modulo.php?codigo_mod=".$consulta["modu_cod"]."'>Modificar</a>
								<a href='../Controller/modulo.controller.php?modu_cod=".$consulta["modu_cod"]."&accion=Borrar' >Eliminar</a>
							</td>
					</tr>";
			}
		?>
	</tbody>
	<a href="Registro.modulo.php">Crear modulo</a>
</table>
</body>
</html>