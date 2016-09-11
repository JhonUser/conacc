	<!-- Formulario: Guardar rol -->
<section>


<form action="../Controller/guardarrol.php" method="post">
		<center class=""><h5>Registro de rol</h5></center>

	<label>Codigo del rol</label>
		<input type="number" name="txt_codrol"required/><br>
	<label>Nombre del rol</label>
		<input type="text" name="txt_nomrol" required/>
	<label>Descripcion</label>
		<input type="text" name="txt_descrol" required/>
	<button value="Guardar" class="btn thin teal right" name="action">Guardar</button>
</form>

</section>


<section>
	<?php include 'consulta.rol.php'; ?>
</section>
