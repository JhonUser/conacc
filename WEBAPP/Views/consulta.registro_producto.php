<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$producto=Gestion_producto::consultar();

?>

<button><a href="dashboard.php?seccion=rr_producto">Volver</a></button>
<table id="myTable">
	<thead>
		<tr>
			<td>codigo registro </td>
			<td>Codigo usuario</td>
			<td>codigo producto</td>
			<td>codigo propietario</td>
			<td>registro serial </td>
			<td>registro colos</td>
			<td>registro fecha</td>
			<td>registro descripcion</td>
			<td>registro autoalterna </td>
			<td>accion</td>


		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($producto as $produc) {
			echo "<tr>
					<td>".$produc["regi_cod"]."</td>
					<td>".$produc["usu_cod"]."</td>
					<td>".$produc["produ_cod"]."</td>
					<td>".$produc["prop_cod"]."</td>
					<td>".$produc["regi_serial"]."</td>
					<td>".$produc["regi_color"]."</td>
					<td>".$produc["regi_fecha"]."</td>
					<td>".$produc["regi_desc"]."</td>
					<td>".$produc["regi_autoalterna"]."</td>
					<td>
						<a href='modificar.registro_producto.php?producto=".$produc["regi_cod"]."'class='btn-floating light-green'><i class='material-icons'>edit</i></a>
						<a href='../Controller/controller.registro.producto.php?codigo_produc=".$produc["regi_cod"]."& action=eliminar'class='btn-floating light-red' >
						<i class='material-icons'>delete_forever</i></a>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>


