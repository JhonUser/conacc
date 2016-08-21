	<!-- Formulario: Guardar rol -->
<div class="container">


<form action="../Controller/guardarrol.php" method="post">
	<h1>Registro de rol</h1>
	<label>Codigo del rol</label>
		<input type="number" name="txt_codrol"required/><br>
	<label>Nombre del rol</label>
		<input type="text" name="txt_nomrol" required/>
	<label>Descripcion</label>
		<input type="text" name="txt_descrol" required/>
	<button value="Guardar" class="btn" name="action">Guardar</button>
</form>
	<a href="consulta.rol.php">Consultar todo</a>
</div>
