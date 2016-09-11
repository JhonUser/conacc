	<!-- Formulario: Guardar Marca de producto -->
<div class="container">
	<center class="">Registro de marcas</center>
		<form class="col s12" action="../Controller/marca.controller.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">laptop</i>
				<input id="icon_prefix" type="text" name="txt_nommarca" class="validate" required>
				<label for="icon_prefix">Nombre de marca</label>
			</div>

			<div class="file-field input-field">
				<div class="btn">
					<span>Logo</span>
					<input type="file" name="img_logomarca" required>
	  			</div>
	      		<div class="file-path-wrapper">
	        		<input class="file-path validate" type="text">
	      		</div>
			</div>

			<div class="col s7">
				<button class="waves-effect waves-light btn teal right thin" name="accion" value="create" >Guardar</button>
			</div>
				<?php echo @$_REQUEST["$mensaje"]; ?>
	</form>
</div>
<div class="container">
				<?php include 'consulta.marca.php'; ?>
</div>
