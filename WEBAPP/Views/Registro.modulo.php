	<!-- Formulario: Guardar modulo -->

	<form action="../Controller/modulo.controller.php" method="POST">
		<h1>Registrar modulo</h1>
			<label>Codigo</label>
				<input type="number" min=0 name="txt_moducod" required/>
					<br>
			<label>Nombre</label>
				<input type="text" name="txt_modunom" required/>
					<br>
		<button name="accion" value="Guardar">Guardar</button>

	</form>
	<a href="consulta.modulo.php">Consultar todo</a>