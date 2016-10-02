<?php
require_once("../Model/conexion.php");
require_once("../Model/modulo.class.php");

$modu=Gestion_modulo::Consulta();
?>

<table id="myTable" class="striped responsive-table">
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre del modulo</td>
			<td>Editar/Eliminar</td>
			
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
								<a href='dashboard.php?seccion=m_modulo&codigo_mod=".$consulta["modu_cod"]."'class='btn-floating light-green'>
								<i class='material-icons'>edit</i>
								<a href='../Controller/modulo.controller.php?modu_cod=".$consulta["modu_cod"]."&accion=Borrar'  class='btn-floating red'>
								<i class='material-icons'>delete_forever</i>
							</td>
					</tr>";
			}
		?>
	</tbody>
</table>
