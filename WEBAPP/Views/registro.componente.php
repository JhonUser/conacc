	<!-- Formulario: Guardar componente -->
<div class="container">

<div class="row">
<form action="../controller/controller.componente.php" method="post"/>
	<h1>Registro de componente</h1>
	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input name="nombre" type="text" required/>
		<label>Nombre del componente</label>
		
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input name="cantidad" type="number" required="true"/>
		<label>Cantidad de componentes</label>
	</div>

	<button name="action" value="guardar">Guardar</button>
		<a href="consulta.componente.php">Consultar todo</a>

</form>
</div>
</div>