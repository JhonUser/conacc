<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$producto=Gestion_producto::consultar();

?>

<table id="myTable">
	<thead>
		<tr>
			<td>Codigo registro </td>
			<td>Documento del responsable</td>
			<td>Producto</td>
			<td>Documento del propietario</td>
			<td>Serial </td>
			<td>Color del producto</td>
			<td>Fecha de registro</td>
			<td>Descripcion</td>
			<td>Autorizacion alterna</td>
			<td>Accion</td>


		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($producto as $produc) {
			echo "<tr>
					<td>".$produc["regi_cod"]."</td>
					<td>".$produc["usu_docu"]."</td>
					<td>".$produc["tipopro_nombre"]."-".$produc["marca_nombre"]."</td>
					<td>".$produc["prop_doc"]."</td>
					<td>".$produc["regi_serial"]."</td>
					<td><div style='width:100px; height:40px; border:1px solid; background-color:".$produc["regi_color"]."'></div></td>
					<td>".$produc["regi_fecha"]."</td>
					<td>".$produc["regi_desc"]."</td>
					<td>".$produc["regi_autoalterna"]."</td>
					<td>
						
						<a href='dashboard.php?seccion=m_r_producto&producto=".$produc["regi_cod"]."'class='btn-floating light-green'>
									<i class='material-icons'>edit</i>
								</a>
						<a href='../Controller/controller.registro.producto.php?codigo_produc=".$produc["regi_cod"]."& action=eliminar'class='btn-floating light-red' >
						<i class='material-icons'>delete_forever</i></a>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>


