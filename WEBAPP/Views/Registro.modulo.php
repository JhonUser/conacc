	<!-- Formulario: Guardar modulo -->
<div class="container">
	<center class="">Registro de modulos</center>
		<form class="col s12" action="../Controller/modulo.controller.php" method="POST">
			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">vpn_key</i>
				<input id="icon_prefix" type="number" name="txt_moducod" class="validate" required>
				<label for="icon_prefix">Codigo del modulo</label>
			</div>

			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">view_module</i>
				<input id="icon_prefix" type="text" name="txt_modunom" class="validate" required>
				<label for="icon_prefix">Codigo del modulo</label>
			</div>

			<div class="col s7">
				<button  class="waves-effect waves-light btn teal right thin" name="accion" value="Guardar">Guardar</button>
			</div>
		</form>
</div>
<div class="container">
	<?php include 'consulta.modulo.php'; ?>
</div>