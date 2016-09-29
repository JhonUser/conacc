<?php
require_once("../Model/conexion.php");
require_once("../Model/producto.class.php");


$produ =Gestion_Producto::Consultar();


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
  	var t = "../Controller/producto.controller.php?codigo_pro="+ c + "&accion=Borrar";
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
								<a onclick='d(".$consulta["produ_cod"].")' class='btn-floating red'>
									<i class='material-icons'>delete_forever</i>
								</a>
					</tr>";
			}
		?>
	<br></tbody>
</table>