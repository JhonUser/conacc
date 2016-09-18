	<!-- Formulario: Guardar componente -->
<div class="container">
	<center class="">Registro de componentes</center>
		<form action="../controller/controller.componente.php" method="post"/>
			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">settings_input_component</i>
				<input id="icon_prefix" type="text" name="nombre" class="validate" required>
				<label for="icon_prefix">Nombre del componente</label>
			</div>

			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">format_list_numbered</i>
				<input id="icon_prefix" type="number" name="cantidad" class="validate" required>
				<label for="icon_prefix">Cantidad de componentes</label>
			</div>

			<div class="input-field col s7">
				<button name="action" class="btn" value="guardar">Guardar</button>
			</div>
		</form>

</div>
<div class="container">
	<?php include 'consulta.componente.php'; ?>
</div>