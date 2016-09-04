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
<label>codigo de propiedad</label>
	<select name="codigo_propiedad">
		<?php
		foreach ($propietario as $propie ) {
			echo "<option value=".$propie["propie_cod"].">".$propie["propie_cod"]."</option>";
		}
		?>
	</select>
<label>registra serial</label><input name="registro_serial" type="text"/>
<label>registre color </label><input name="registre_color" type="text"/>
<label>registre fecha </label><input name="registre_fecha" type="date"/>
<label>registre descripcion</label><textarea name="registre_decrip" type="text"></textarea>
<label>registre autoalterna </label><input name="registre_autoalerta" type="text"/>

<button name="action" value="Guardar">Guardar</button>
<button><a href="consulta.registro_producto.php">Consultar</a></button>
</form>
</body>
</html>
