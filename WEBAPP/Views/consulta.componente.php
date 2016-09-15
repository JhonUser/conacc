<?php

require_once("../model/conexion.php");
require_once("../model/componente.class.php");

$componente=Gestion_componente::consultar();

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">$(document).ready(function(){
    $('#myTable').DataTable();
});</script>
</head>
<body>
	<button><a href="../Views/dashboard.php?seccion=r_componente">Volver</a></button>
<table id="myTable">
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Cantidad</td>
			<td>Accion </td>

		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($componente as $comp) {
			echo "<tr>
					<td>".$comp["compo_cod"]."</td>
					<td>".$comp["compo_nombre"]."</td>
					<td>".$comp["compo_cant"]."</td>
					<td>
						<a href='modificar.componente.php?codigo_component=".$comp["compo_cod"]."'>modificar</a>
						<a href='../Controller/controller.componente.php?compo_codi=".$comp["compo_cod"]."& action=eliminar' >Eliminar</a>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>

</body>
</html>