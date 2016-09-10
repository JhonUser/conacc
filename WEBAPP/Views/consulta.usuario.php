<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$usuario =Gestion_usuario::consultar_usuario();//se trae los usuarios registrados

?>


<html>
<head>
	<title>Consultar Usuario</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
   		 $('#myTable').DataTable();
	});
	
   		 function valida(usucod){
   		 		if(confirm("desea inactivar este usuario")){
					location.href = "../Controller/registro.controller.php?codigo_usuario="+usucod+"&action=estado"
				} 
   		 }
   		  function valida1(usu){
   		 		if(confirm("desea activar este usuario")){
					location.href = "../Controller/registro.controller.php?codigo_usuario="+usu+"&action=activo"
				} 
   		 }
<<<<<<< HEAD
   		  function valida2(usuM,code){
=======
   		  function valida2(usuM){
>>>>>>> origin/master
   		   	if (usuM=="Inactivo") {
   		   		alert("este usario esta Inactivo");
 					
   		   	}
   		   	else{
<<<<<<< HEAD
   		   		location.href = "modificar.usuario.php?codigo_usuario="+code+"";
=======
   		   		valida3();
   		   		
>>>>>>> origin/master
   		   	}
		  }
		 
	</script>
</head>
<body>
<table id="myTable" class="striped">
	<thead>
		<tr>
			<td >Documento</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>Correo Electronico</td>
			<td>Nombre de usuario</td>
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
<<<<<<< HEAD
								<span style='cursor:pointer' onclick='valida2(&#34".$consulta["usu_estado"]."&#34,".$consulta["usu_cod"].");'>
=======
								<span style='cursor:pointer' onclick='valida2(&#34".$consulta["usu_estado"]."&#34);'>
>>>>>>> origin/master
									<img src='images/modificar.png' height='20' width='20'/></span>

								<span class='btninac' onclick='valida(".$consulta["usu_cod"].");' style='cursor:pointer'>Inactivo</span>

								<span onclick='valida1(".$consulta["usu_cod"].");' style='cursor:pointer'>activar</span>
							</td>
					</tr>";
			}
		?>
	</tbody>
	
<<<<<<< HEAD
	
=======
	<script>
 function valida3(usu_mo){
		  	if(confirm("Desea modificar este usuario")){
   		   			location.href = "modificar.usuario.php?codigo_usuario="+usu_mo+"&action=Modificar"
   		   		}
		  }

</script>
>>>>>>> origin/master
</table>
</body>
</html>
