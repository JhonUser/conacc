<?php
require_once("../Model/conexion.php");
require_once("../Model/marca.class.php");

$marca=Gestion_Marca::Cargar_marca();
?>
<script type="text/javascript">
function d(c){
swal({
  title: "¿Desea eliminar?",
  text: "",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Si",
  cancelButtonText: "No",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
  	swal("Muy bien", "Se ha eliminadó", "success");
  	var t = "../Controller/marca.controller.php?marca_cod="+ c + "&accion=Borrar";
  	window.location.href=t;
   

  } else {
	    swal("Cancelado", "No se eliminara el registro", "error");
  }
});
	}
	</script>

<table id="myTable">
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre de marca</td>
			<td>Nombre de imagen</td>
			<td>Editar/Eliminar</td>
			
			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($marca as $consulta) {
				echo "<tr>
							<td>".$consulta["marca_cod"]."</td>
							<td>".$consulta["marca_nombre"]."</td>
							<td>".$consulta["marca_logo"]."</td>
							<td>
								<a href='dashboard.php?seccion=m_marca&codigo_marca=".$consulta["marca_cod"]."'class='btn-floating light-green'>
								<i class='material-icons'>edit</i>
								</a>
								<a onclick='d(".$consulta["marca_cod"].")' class='btn-floating red'>
									<i class='material-icons'>delete_forever</i>
								</a>
							</td>
					</tr>";
			}
		?>
	</tbody>
</table>
