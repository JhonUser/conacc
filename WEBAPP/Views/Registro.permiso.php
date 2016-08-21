<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");
require_once("../Model/permiso.class.php");
$rol=Gestion_usuario::cargar_rol();
$modulo=Gestion_permiso::Cargar_modulo();
?>
	<!-- Formulario: Guardar permiso -->

<form action="../Controller/permiso.controller.php" method="post">
	<label>Rol</label>
	<select name="sele_rol">
		<?php
		foreach ($rol as $roles) {
		echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
	}
	?>
	</select>
	<br>
	<label>Modulo</label>
	<select name="sele_modu">
		<?php
		foreach ($modulo as $modulos) {
		echo "<option value=".$modulos["modu_cod"].">".$modulos["modu_nom"]."</option>";
	}
	?>
	</select>
	<br>
	<label>Estado del permiso</label>
	<input type="text" name="estado_permi" required/>
	<br>
	<label>Modulo</label>
	<input type="text" name="modu_permi" required/>

	<button value="Guardar" name="accion">Guardar</button>
</form>
<a href="consulta.permiso.php">Consultar todo</a>
