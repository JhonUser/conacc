<?php


 if (!isset($_SESSION["nombre"]) or ($_SESSION["rol"] != 1)) {
	header("location: ../Views/index.php");
 }
require_once("../model/conexion.php");
require_once("../Model/registro.producto.class.php");
$cedula=$_POST["cedula"];

$codigoEntrada=Gestion_producto::consultarced($cedula);
//$comp = count($codigoEntrada);

?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
    	$('#myTable').DataTable();
	});
	function salida(sld){

		location.href = "../Controller/controller.registro.producto.php?salidasced="+sld+"&action=salidaced";
	}
	</script>
<div class="row">
<div class="col s9 offset-s3">
<table id="myTable">
	<thead>
		<tr>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Documento</td>
			<td>serial</td>
			<td>Producto</td>
			<td>Color</td>
			<td>Fecha entrada</td>
			<td>Hora entrada</td>
			<td>Fecha salida</td>
			<td>Hora salida</td>

		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($codigoEntrada as $camp) {
			echo "<tr>
					<td>".$camp["prop_nom"]."</td>
					<td>".$camp["prop_ape"]."</td>
					<td>".$camp["prop_doc"]."</td>
					<td>".$camp["regi_serial"]."</td>
					<td>".$camp["tipopro_nombre"]."-".$camp["marca_nombre"]."</td>
					<td>".$camp["entsal_fechaent"]."</td>
					<td>".$camp["entsal_horaent"]."</td>
					<td>".$camp["entsal_fechasal"]."</td>
					<td>".$camp["entsal_horasal"]."</td>
					
					<td>
					<a class='btn-floating light-red' title='Marcar salida' style='cursor:pointer'onclick='salida(".$camp["entsal_cod"].");'>
						<i class='material-icons'>exit_to_app</i></a>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>
</div>
</div>