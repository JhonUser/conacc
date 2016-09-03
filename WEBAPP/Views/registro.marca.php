	<!-- Formulario: Guardar Marca de producto -->
<div class="container">

	<form action="../Controller/marca.controller.php" method="POST" enctype="multipart/form-data">
		<h2>Guardar Marca</h2>
		<label>Nombre de marca</label><br>
			<input type="text" name="txt_nommarca" required/><br>
		<label>Logo de marca</label><br>
			<input type="file" name="img_logomarca" required/><br>
		<button name="accion" value="create" class="btn">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"]; ?>
	</form>
</div>
