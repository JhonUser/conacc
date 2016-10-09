<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$producto=Gestion_producto::consultar();

?>

<table id="myTable">
	<thead>
		<tr>
			<td>codigo registro </td>
			<td>Documento del responsable</td>
			<td>Descripcion del producto</td>
			<td>Documento del propietario</td>
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
					<td>".$produc["usu_docu"]."</td>
					<td>".$produc["produ_desc"]."</td>
					<td>".$produc["prop_doc"]."</td>
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


