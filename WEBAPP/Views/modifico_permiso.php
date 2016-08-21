<?php
//Modifico_permiso.php
require_once("../Model/conexion.php");
require_once("../Model/permiso.class.php");


$codigo =Gestion_permiso::Consultarporcodigo($_GET["codigo_permi"]);


?>
	<!-- Formulario: Modificar permiso -->

	<form action="../Controller/permiso.controller.php" method="POST">
	<h1>Modificar usuario</h1>
		<label>Codigo de rol: <?php echo $codigo["rol_cod"]; ?></label>
			<input type="hidden" name="rol_cod" value=" <?php echo $codigo["rol_cod"]; ?>"/>
				<br>
		<label>Codigo de modulo: <?php echo $codigo["modu_cod"]; ?></label>
			<input type="hidden" name="modu_cod" value=" <?php echo $codigo["modu_cod"]; ?>"/>
				<br>
		<label>Estado del permiso</label>
			<input type="text" name="estado_permi" value=" <?php echo $codigo["estado_permi"]; ?>"required/>
				<br>
		<label>Modulo del permiso</label>
			<input type="text" name="modulo_permi" value=" <?php echo $codigo["modulo_permi"]; ?>"required/>
				<br>
	<button value="Modificar" name="accion">Modificar</button>
	</form>
	<a href="consulta.permiso.php">Volver</a>
	<a href="registro.permiso.php">Crear permiso</a>