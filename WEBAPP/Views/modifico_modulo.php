<?php
require_once("../Model/conexion.php");
require_once("../Model/modulo.class.php");


$codigo =Gestion_modulo::Consultarporcodigo($_GET["codigo_mod"]);

?>
	<!-- Formulario: Modificar modulo -->
	
<section>
<a href="dashboard.php?seccion=r_modulo" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>
	<form action="../Controller/modulo.controller.php" method="POST">
		<center><h4 class="thin">Modificar modulo</h4></center>

			<label>Codigo: <?php echo $codigo["modu_cod"]; ?></label>
				<input type="hidden" name="txt_moducod" value=" <?php echo $codigo["modu_cod"]; ?>"/>
					<br>
					<br>
			<label>Nombre</label>
				<input type="text" name="txt_modunom" value=" <?php echo $codigo["modu_nom"]; ?>"/>
					<br>
				<button name="accion" class="btn teal thin right" value="Modificar">Modificar</button>

	</form>

</section>