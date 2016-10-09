<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$usuario =Gestion_usuario::consultar_usuario();//se trae los usuarios registrados

?>


>
	<script type="text/javascript">
	$(document).ready(function(){
   		 $('#myTable').DataTable();
	});

   		function valida(usue,usucod){
   			if(usue=="Inactivo"){
   				swal({
				  title: "El usuario ya esta inactivo",
				  timer: 2000,
				  showConfirmButton: false
				});
   			}
   			else{

			swal({
			  title: "¿Desea inactivar este usuario?",
			  type: "warning",
			  showCancelButton: true,
			  cancelButtonText: "No",
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Si",
			  closeOnConfirm: false
			},
			function(){
			  swal("Hecho", "Se ha inactivado.", "success");
			  location.href = "../Controller/registro.controller.php?codigo_usuario="+usucod+"&action=estado"
			});
			}
   		 		
   		 }
   		  function valida1(usues, usu){
   		  	 if(usues=="Activo"){
   		  	 	swal({
				  title: "El usuario ya esta inactivo",
				  timer: 2000,
				  showConfirmButton: false
				});
   		  	 }
   		  	 else{
   		  		swal({
			  title: "¿Desea activar este usuario?",
			  type: "warning",
			  showCancelButton: true,
			  cancelButtonText: "No",
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Si",
			  closeOnConfirm: false
			},
			function(){
			  swal("Hecho", "Se ha activado.", "success");
			  location.href = "../Controller/registro.controller.php?codigo_usuario="+usu+"&action=activo"
			});
   		  	}
   		 }
   		  function valida2(usuM,code){
   		   	if (usuM=="Inactivo") {
   		   		swal({
				  title: "El usuario esta inactivo",
				  text: "No se puede modificar, si desea modificar cambie el estado.",
				  timer: 2500,
				  showConfirmButton: false
				});

   		   	}
   		   	else{
   		   		location.href = "dashboard.php?seccion=m_usuario&codigo_usuario="+code+"";
   		   	}
		  }

	</script>


<table id="myTable" class="striped bordered responsive-table">
	<thead>
		<tr>
			<td>Documento</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>Correo Electronico</td>
			<td>Usuario</td>
			<td>Estado</td>
			<td>Accion</td>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($usuario as $consulta) {//se pone los registros de los usuarios
				echo "<tr>
							<td>".$consulta["usu_docu"]."</td>
							<td>".$consulta["usu_nom"]."</td>
							<td>".$consulta["usu_ape"]."</td>
							<td>".$consulta["usu_tel"]."</td>
							<td>".$consulta["usu_email"]."</td>
							<td>".$consulta["usu_nick"]."</td>
							<td>".$consulta["usu_estado"]."</td>
							<td>
								<span title='Inactivar' onclick='valida(&#34".$consulta["usu_estado"]."&#34,".$consulta["usu_cod"].");'class='btn-floating light-red' style='cursor:pointer'>
									<i class='material-icons'>lock_outline</i>
								</span>
								<span title='Activar' onclick='valida1(&#34".$consulta["usu_estado"]."&#34,".$consulta["usu_cod"].");'class='btn-floating light-blue' style='cursor:pointer'>
									<i class='material-icons'>lock_open</i>
								</span>
								<span style='cursor:pointer' onclick='valida2(&#34".$consulta["usu_estado"]."&#34,".$consulta["usu_cod"].");'class='btn-floating light-green'>
									<i class='material-icons'>edit</i>
								</span>


							</td>
					</tr>";
			}
		?>
	</tbody>


</table>


