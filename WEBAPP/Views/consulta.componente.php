<?php

require_once("../model/conexion.php");
require_once("../model/componente.class.php");

$componente=Gestion_componente::consultar();

?>

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
						
						<a href='dashboard.php?seccion=m_compoa&codigo_component=".$comp["compo_cod"]."'class='btn-floating light-green'>
								<i class='material-icons'>edit</i>
						<a href='../Controller/controller.componente.php?compo_codi=".$comp["compo_cod"]."&action=eliminar' class='btn-floating red'>
								<i class='material-icons'>delete_forever</i>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>