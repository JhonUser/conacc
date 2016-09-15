<?php
require_once("../Model/conexion.php");
require_once("../Model/producto.class.php");


$produ =Gestion_Producto::Consultar();


?>

<table id="myTable" class="striped responsive-table">
	<thead>
		<tr>
			<td>Marca</td>
			<td>Tipo de producto</td>
			<td>Descripcion</td>
			<td>Accion</td>

			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($produ as $consulta) {
				echo "<tr>
							<td>".$consulta["marca_nombre"]."</td>
							<td>".$consulta["tipopro_nombre"]."</td>
							<td>".$consulta["produ_desc"]."</td>
							<td>
								<a href='dashboard.php?seccion=m_producto&codigo_pro=".$consulta["produ_cod"]."'class='btn-floating light-green'>
									<i class='material-icons'>edit</i>
								</a>
								<a href='../Controller/producto.controller.php?codigo_pro=".$consulta["produ_cod"]."&accion=Borrar' class='btn-floating red'>
									<i class='material-icons'>delete_forever</i>
								</a>
					</tr>";
			}
		?>
	<br></tbody>
</table>