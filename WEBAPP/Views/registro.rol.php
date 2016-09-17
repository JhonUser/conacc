	<!-- Formulario: Guardar rol -->

	<div class="container">
	 <div class="row">
			 <div class="card">
				 <div class="card-action red darken-4">
					 <button type="button" class="btn red darken-4 z-depth-0 white-text thin" style="margin-left:25%">Registro de Rol</button>
				 </div>
				 <div class="card-content">
	<form action="../Controller/guardarrol.php" method="post">
			<center><h4 class="thin">Registro de Rol</h4></center>
			<div class="row">
			  <div class="input-field col s10">
					<i class="material-icons prefix grey-text">control_point_duplicate</i>
				  <input type="number" name="txt_codrol" placeholder="Codigo de rol" class="validate  brown-text" required>
				</div>
			</div>
			<div class="row">
			  <div class="input-field col s10">
					<i class="material-icons prefix grey-text">control_point</i>
				  <input type="text" name="txt_nomrol" id="nom" class="validate" required>
					<label for="nom">Nombre</label>
				</div>
			</div>
			<div class="row">
			  <div class="input-field col s10">
					<i class="material-icons prefix grey-text">description</i>
				  <input type="text" name="txt_descrol" id="des" class="validate" required>
					<label for="des">Descripcion</label>
				</div>
			</div>
			<div class="card-action grey lighten-3">
			<button type="submit" value="Guardar" class="btn thin teal" name="action">Guardar</button>
	</form>

</div>
</div>
</div>
</div>

	<div class="container">
	<?php include 'consulta.rol.php'; ?>
</div>
