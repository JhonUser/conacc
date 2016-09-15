<!-- Andrea T. -->
<?php
require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$usuario=Gestion_producto::consultarUsu();
$producto=Gestion_producto::consultarprodu();
$propietario=Gestion_producto::consultarpropie();

?>
<<<<<<< HEAD
<div class="container">
 <div class="row">
		 <div class="card">
			 <div class="card-action grey darken-3">
				 <button type="button" class="btn  grey darken-3 z-depth-0 white-text thin" style="margin-left:25%">Registro de producto</button>
			 </div>
			 <div class="card-content">
=======

<section>

>>>>>>> origin/master
	<form action="../Controller/controller.registro.producto.php" method="post"/>

		<div class="input-field">

			<select name="codigo">
				<?php
					foreach ($usuario as $produc ) {
						echo "<option value=".$produc["usu_cod"].">".$produc["usu_nom"]."</option>";
					}
				?>

		</select>
		<label>Nombre del Usuario</label>
	</div>

		<div class="input-field">

			<select name="codigo_pro">
				<?php
					foreach ($producto as $produc ) {
						echo "<option value=".$produc["produ_cod"].">".$produc["produ_desc"]."</option>";
					}
				?>

		</select>
		<label>Descripcion del producto</label>
	</div>

	<div class="input-field">


		<select name="codigo_propiedad">
			<?php
			foreach ($propietario as $propie ) {
				echo "<option value=".$propie["prop_cod"].">".$propie["prop_nom"]."</option>";
			}
			?>

		</select>
		<label>Nombre del propietario</label>
	</div>

<<<<<<< HEAD
	<div class="input-field">
<label >Registra serial</label>
		<input id="icon_prefix" name="registro_serial" type="text"/>

	</div>

	<div class="input-fiel">
	<label>Registre color </label>
		<input id="icon_prefix" name="registre_color" type="text"/>


	</div>

	<div class="input-field">

		<input id="icon_prefix" name="registre_fecha" type="date"/>

=======
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
>>>>>>> origin/master
	</div>

	<div class="input-field">

		<textarea name="registre_decrip" type="text"></textarea>
		<label for="icon_prefix">Registre descripcion</label>

	</div>

	<div class="input-field">

		<input id="icon_prefix" name="registre_autoalerta" type="text"/>
		<label for="icon_prefix">Registre autoalterna</label>

	</div>

</form>

</div>

<div class="card-action grey lighten-3">
		<button name="action" class="btn thin" value="Guardar">Guardar</button>
		<button type="button" class="btn thin indigo"><a href="dashboard.php?seccion=r_accesorio" class="white-text">Guardar Accesorio</a></button>
		<button  class="blue btn"><a href="dashboard.php?seccion=r_componente" class="white-text thin">Registro Componente</a></button>
</div>
</div>
</div>

<<<<<<< HEAD
<div class="container">
	<?php include 'consulta.registro_producto.php'; ?>
</div>
=======

>>>>>>> origin/master
