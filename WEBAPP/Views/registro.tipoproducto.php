	<!-- Formulario: Guardar tipo de producto -->
<div class="container">


	<h2>Guardar tipo de prducto</h2>
	<form action="../Controller/tipoproducto.controller.php" method="POST">
		<label>Codigo del tipo de producto</label>
			<input type="text" name="txt_tipoprocod"/></br>
		<label>Nombre del tipo de producto</label>
			<input type="text" name="txt_tipopronom"/></br>
		<label>Descripcion del tipo de producto</label>
			<input type="text" name="txt_desctipopro"></br>
		<button name="accion" value="create" class="btn">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"];
		?>
	</form>
	<a href="consulta.tipoproducto.php">Consultar todo</a>

</div>
