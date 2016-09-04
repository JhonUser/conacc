<!-- Jhon T. Gómez -->
<?php require_once("../Model/conexion.php"); require_once("../Model/propietario.class.php"); ?>

	<form action="../Controller/propietario.controller.php" method="post" <?php $codigo = registro::datos_modificar(base64_decode($_GET["cod"])); ?>>
		<input type="hidden" name="cod" value="<?php echo $codigo["prop_cod"]; ?>" required>
			<label for="ced">CC / T.I</label>
			<input type="text" name="ced"  id="ced" value="<?php echo $codigo["prop_doc"]; ?>" required>
			<label for="nom">Nombre</label>
			<input type="text" name="nom"  id="nom" value="<?php echo $codigo["prop_nom"]; ?>" required>
			<label for="ape">Apellido</label>
			<input type="text" name="ape"  id="ape" value="<?php echo $codigo["prop_ape"]; ?>" required>
			<label for="tel">Telefono</label>
			<input type="number"name="tel" id="tel" value="<?php echo $codigo["prop_tel"]; ?>" required>
			<label for="dir">Direccion</label>
			<input type="text"  name="dir" id="dir" value="<?php echo $codigo["prop_dir"]; ?>" required>
			<label for="ema">Email</label>
			<input type="email" name="ema" id="ema" value="<?php echo $codigo["prop_ema"]; ?>" required>
			<label for="cen">Centro</label>
			<input type="text"  name="cen" id="cen" value="<?php echo $codigo["prop_cen"]; ?>" required>
			<label for="car">Cargo</label>
			<input type="text"  name="car" id="car" value="<?php echo $codigo["prop_car"]; ?>" required>
		<button class="right btn green" name="modificar" >Guardar</button>
	</form>
