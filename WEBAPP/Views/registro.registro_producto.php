<!-- Andrea T. -->
<?php
require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$usuario=Gestion_producto::consultarUsu();
$producto=Gestion_producto::consultarprodu();
$propietario=Gestion_producto::consultarpropie();

?>

<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
	<form action="../Controller/controller.registro.producto.php" method="post"/>

	<label>codigo de usuario</label>
		<select name="codigo">
			<?php
				foreach ($usuario as $usu ) {
			echo "<option value=".$usu["usu_cod"].">".$usu["usu_nom"]."</option>";
			}
			?>
		</select>
	<label>codigo del producto</label>
		<select name="codigo_pro">
			<?php
			foreach ($producto as $produc ) {
			echo "<option value=".$produc["produ_cod"].">".$produc["produ_cod"]."</option>";
			}
			?>
		</select>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<label>codigo de propiedad</label>
		<select name="codigo_propiedad">
			<?php
			foreach ($propietario as $propie ) {
				echo "<option value=".$propie["propie_cod"].">".$propie["propie_cod"]."</option>";
			}
			?>
		</select>
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registro_serial" type="text"/>
		<label for="icon_prefix">registra serial</label>
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registre_color" type="text"/>
		<label for="icon_prefix">registre color </label>
		
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registre_fecha" type="date"/>
		<label for="icon_prefix">registre fecha </label>
	
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<textarea name="registre_decrip" type="text"></textarea>
		<label for="icon_prefix">registre descripcion</label>
		
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix grey-text">account_circle</i>
		<input id="icon_prefix" name="registre_autoalerta" type="text"/>
		<label for="icon_prefix">registre autoalterna </label>
		
	</div>
	</div>

		<button name="action" value="Guardar">Guardar</button>
		<button><a href="consulta.registro_producto.php">Consultar</a></button>
</form>
</body>
</html>
