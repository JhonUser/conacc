<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$codigo =Gestion_usuario::Consultarusuariocodigo($_GET["codigo_usuario"]);
	// $codigo["usu_pass"];
?>
<div class="container">
	<div class="row">
	    <div class="card">
				<div class="card-action lime darken-3">
					<a href="dashboard.php?seccion=usuario" class="btn-floating z-depth-0 lime darken-3"><i class="material-icons">keyboard_backspace</i></a>
					<button type="button" class="btn lime darken-3 z-depth-0 white-text thin" style="margin-left:25%">Modificar Usuario</button>
				</div>
	      <div class="card-content">
	<form action="../Controller/registro.controller.php" method="POST">
	<label>Codigo: <?php echo $codigo["usu_cod"]; ?></label>
	<input type="hidden" name="codigo" value=" <?php echo $codigo["usu_cod"]; ?>"/>

	<label>Documento</label>
	<input type="text" name="documento" value=" <?php echo $codigo["usu_docu"]; ?>" required/>

	<label>Nombre</label>
	<input type="text" name="nombre" value=" <?php echo $codigo["usu_nom"]; ?>"required/>

	<label>Apellido</label>
	<input type="text" name="apellido" value=" <?php echo $codigo["usu_ape"]; ?>"required/>

	<label>Email</label>
	<input type="email" name="email" value=" <?php echo $codigo["usu_email"]; ?>"required/>

	<label>Telefono</label>
	<input type="text" name="telefono" value=" <?php echo $codigo["usu_tel"]; ?>"/>

	<label>Nombre de Usuario</label>
	<input type="text" name="nombredeusuario" value=" <?php echo $codigo["usu_nick"]; ?>"required/>


<div class="card-action grey lighten-3">
	<button value="Modificar" class="btn teal thin" name="action">Modificar</button>



</form>
</div>
</div>
</div>
</div>
