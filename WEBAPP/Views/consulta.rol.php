<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");


$rol =Gestion_rol::Consultar();

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
  	var t = "../Controller/guardarrol.php?rol_cod="+ c + "&action=Borrar";
  	window.location.href=t;
   

  } else {
	    swal("Cancelado", "No se eliminara el registro", "error");
  }
});
	}
	</script>

<table id="myTable" class="striped responsive-table">
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre del rol</td>
			<td>Descripcion</td>
			<td>Accion</td>

			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($rol as $consulta) {
				echo "<tr>
							<td>".$consulta["rol_cod"]."</td>
							<td>".$consulta["rol_nombre"]."</td>
							<td>".$consulta["rol_desc"]."</td>
							<td>
								<a href='dashboard.php?seccion=m_rol&codigo_rol=".$consulta["rol_cod"]."'class='btn-floating light-green'>
									<i class='material-icons'>edit</i>
								</a>
								<a onclick='d(".$consulta["rol_cod"].")' class='btn-floating red'>
									<i class='material-icons'>delete_forever</i>
								</a>
							</td>
					</tr>";
			}
		?>
	<br></tbody>
</table>
