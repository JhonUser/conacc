<?php
require_once("../Model/conexion.php");
require_once("../Model/modulo.class.php");


$codigo =Gestion_modulo::Consultarporcodigo($_GET["codigo_mod"]);

?>
	<!-- Formulario: Modificar modulo -->
	
	
	<form action="../Controller/modulo.controller.php" method="POST">
		<h1>Registrar modulo</h1>
			<label>Codigo: <?php echo $codigo["modu_cod"]; ?></label>
				<input type="hidden" name="txt_moducod" value=" <?php echo $codigo["modu_cod"]; ?>"/>
					<br>
					<br>
			<label>Nombre</label>
				<input type="text" name="txt_modunom" value=" <?php echo $codigo["modu_nom"]; ?>"/>
					<br>
				<button name="accion" value="Modificar">Modificar</button>

	</form>
	<a href="consulta.modulo.php">Volver</a>
	<a href="registro.modulo.php">Crear modulo</a>
