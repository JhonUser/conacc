<!-- Andrea T. -->
<?php
require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$usuario=Gestion_producto::consultarUsu();
$producto=Gestion_producto::consultarprodu();
$propietario=Gestion_producto::consultarpropie();

?>

<div class="container">
	<div class="row">
		 <div class="card">
			 <div class="card-action grey darken-3">
				 <button type="button" class="btn  grey darken-3 z-depth-0 white-text thin" style="margin-left:25%;">Registro de producto</button>
			 </div>
			 <div class="card-content">
			 	<div class="row">
				<form action="../Controller/controller.registro.producto.php" method="post">
					<div class="input-field">
						<select name="codigo_pro">
							<?php
								foreach ($producto as $produc ) {
									echo "<option value=".$produc["produ_cod"].">".$produc["produ_desc"]."</option>";
								}
							?>
						</select>
						<label>Producto</label>
					</div>

					<div class="input-field">
						<select name="codigo_propietario">
							<?php
								foreach ($propietario as $propie ) {
									echo "<option value=".$propie["prop_cod"].">".$propie["prop_nom"]."</option>";
								}
							?>
						</select>
						<label>Nombre del propietario</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix grey-text">fingerprint</i>
						<input type="text" id="icon_prefix" name="registro_serial">
						<label>Serial</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix grey-text">color_lens</i>
						<input  type="text" id="icon_prefix" name="registre_color">
						<!-- <label for="icon_prefix">Color</label> -->
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix grey-text">date_range</i>
						<input  type="date" id="icon_prefix" name="registre_fecha">
						<label for="icon_prefix">Fecha</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix grey-text">description</i>
						<input  type="text" id="icon_prefix" name="registre_decrip">
						<label for="icon_prefix">Descripción</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix grey-text">accessibility</i>
						<input type="text" id="icon_prefix" name="registre_autoalerta">
						<label for="icon_prefix">Autorizacion alterina</label>
					</div>

					<button name="action" class="btn thin" value="Guardar">Guardar</button>
				</form>
			</div>
</div>


			
		</div>
	</div>
</div>



<div class="container">
	<?php include 'consulta.registro_producto.php'; ?>
</div>
