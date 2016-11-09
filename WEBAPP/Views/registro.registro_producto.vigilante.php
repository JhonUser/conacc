<?php require_once("../model/conexion.php");
		require_once("../model/registro.producto.class.php");
			$usuario=Gestion_producto::consultarUsu();
			$producto=Gestion_producto::consultarprodu();
			$propietario=Gestion_producto::consultarpropie();
?>
	<div class="container">
	 	<div class="card">
			<div class="card-action teal darken-3">
        <button type="button" class="btn teal darken-3 z-depth-0 white-text thin" style="margin-left:32%">Registro de productos</button>
      </div>
	    <div class="card-content">
				<form action="../Controller/controller.registro.producto.php" method="post">

					<div class="row">

						<div class="input-field col s5">
							<i class="material-icons prefix grey-text">people</i>
							<select name="codigo_pro">
							<?php
								foreach ($producto as $produc ) {
									echo "<option value=".$produc["produ_cod"].">".$produc["tipopro_nombre"]."-".$produc["marca_nombre"]."</option>";
								}
							?>
						</select>
						<label>Producto</label>
						</div>
						<div class="input-field col s1">
							<a href="vigilante.php?p=r_producto" class="btn-floating btn-large waves-effect waves-light red pull-s5"><i class="material-icons">add</i></a>
						</div>

					 <!-- <div class="input-field col 5">
							<i class="material-icons prefix grey-text">people</i>
							<input  type="text" id="icon_prefix" name="codigo_propietario">
							<label for="icon_prefix">Documento de Propietario: *</label>
					</div> -->

					  <div class="input-field col s6">
							<i class="material-icons prefix grey-text">people</i>
							<select name="codigo_propietario">
								<option value="" disabled selected>Propietario*</option>
								<?php
									foreach ($propietario as $propie ) {
										echo "<option value=".$propie["prop_cod"].">".$propie["prop_nom"]."</option>";
									}
								?>
							</select>

						</div>

					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix grey-text">fingerprint</i>
							<input type="text" id="icon_prefix" name="registro_serial">
							<label>Serial: *</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix grey-text">accessibility</i>
							<input type="text" id="icon_prefix" name="registre_autoalerta">
							<label for="icon_prefix">Autorizacion Alterna: *</label>
						</div>
					</div>
					<!-- Colocar fecha en el controlador -->
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix grey-text">color_lens</i>
							<input  type="color" id="icon_prefix" name="registre_color" style="width:100px;height:40px;">
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix grey-text">description</i>
							<input  type="text" id="icon_prefix" name="registre_decrip">
							<label for="icon_prefix">Descripción: *</label>
						</div>
					</div>


				<div class="card-action grey lighten-3">
					<button name="action" class="btn thin" value="Guardar">Guardar</button>
					<a href="dashboard.php?seccion=<?php echo base64_encode('r.propietario'); ?>"class="btn orange right thin">Registrar Propietario</a>
					</form>
				</div>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
	      <p>Here is some more information about this product that is only revealed once clicked on.</p>
	    </div>
	  </div>
	</div>
<div class="row">
	<div class="col s9 offset-s3">
		<?php include'consulta.registro_producto.php'; ?>
	</div>
</div>
