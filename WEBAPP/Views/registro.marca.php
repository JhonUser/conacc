	<!-- Formulario: Guardar Marca de producto -->
<div class="container">

	<form action="../Controller/marca.controller.php" method="POST">
		<h2>Guardar Marca</h2>
		<label>Codigo de marca</label>
			<input type="text" name="txt_codmarca"/>
		<label>Nombre de marca</label>
			<input type="text" name="txt_nommarca"/>
		<label>Logo de marca</label>
			<input type="text" name="img_logomarca">
		<button name="accion" value="create" class="btn">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"]; ?>
	</form>
</div>
