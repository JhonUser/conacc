	<!-- Formulario: Guardar componente -->
<div class="container">

<form action="../controller/controller.componente.php" method="post"/>
	<h1>Registro de componente</h1>
	<label>Nombre del componente</label><br>
		<input name="nombre" type="text" required/><br>
	<label>Cantidad de componentes</label><br>
		<input type="number" name="cantidad" required="true"/><br>
	<button name="action" value="guardar">Guardar</button>
	<a href="consulta.componente.php">Consultar todo</a>
</form>

</div>