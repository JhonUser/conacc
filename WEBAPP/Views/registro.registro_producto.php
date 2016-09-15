<!-- Andrea T. -->
<?php
require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$usuario=Gestion_producto::consultarUsu();
$producto=Gestion_producto::consultarprodu();
$propietario=Gestion_producto::consultarpropie();

?>

<section>

	<form action="../Controller/controller.registro.producto.php" method="post"/>
		
		<div class="input-field col s6">
			<i class="material-icons prefix grey-text">account_circle</i>
			<select name="codigo">
				<?php
					foreach ($usuario as $produc ) {
						echo "<option value=".$produc["usu_cod"].">".$produc["usu_nom"]."</option>";
					}
				?>

		</select>
		<label>Nombre del Usuario</label>
	</div>

		<div class="input-field col s6">
			<i class="material-icons prefix grey-text">account_circle</i>
			<select name="codigo_pro">
				<?php
					foreach ($producto as $produc ) {
						echo "<option value=".$produc["produ_cod"].">".$produc["produ_desc"]."</option>";
					}
				?>

		</select>
		<label>Descripcion del producto</label>
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>

		<select name="codigo_propiedad">
			<?php
			foreach ($propietario as $propie ) {
				echo "<option value=".$propie["prop_cod"].">".$propie["prop_nom"]."</option>";
			}
			?>

		</select>
		<label>Nombre del propietario</label>
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registro_serial" type="text" required/>
		<label for="icon_prefix">Registra serial</label>
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registre_color" type="text"required/>
		<label for="icon_prefix">Registre color </label>

	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registre_fecha" type="date"required/>
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<textarea name="registre_decrip" type="text"></textarea>
		<label for="icon_prefix">Registre descripcion</label>

	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registre_autoalerta" type="text"/>
		<label for="icon_prefix">Registre autoalterna</label>

	</div>


		<button name="action" class="btn" value="Guardar">Guardar</button>
		<button><a href="consulta.registro_producto.php" class="btn red">Consultar</a></button>
</form>
</section>



