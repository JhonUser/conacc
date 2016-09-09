<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");
require_once("../Model/permiso.class.php");
$rol=Gestion_usuario::cargar_rol();
$modulo=Gestion_permiso::Cargar_modulo();
?>
	<!-- Formulario: Guardar permiso -->
<div class="container">
	<center class="">Registro de permisos</center>
		<div class="row">
			<form class="col s12" action="../Controller/permiso.controller.php" method="post">


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
				<div class="input-field col s6">
					<i class="material-icons prefix grey-text">poll</i>
					<input id="icon_prefix" type="text" name="estado_permi" class="validate" required>
					<label for="icon_prefix">Estado del permiso</label>
				</div>

				<div class="input-field col s6">
					 <i class="material-icons prefix">view_module</i>
					 <input id="icon_prefix" type="text" name="modu_permi" class="validate" required>
					 <label for="icon_prefix">Modulo</label>
				</div>
				
				<div class="col s7">
					<button class="waves-effect waves-light btn teal right thin" value="Guardar" name="accion">Guardar</button>
				</div>
			</div>
		</form>
</div>
<div class="container">
	<?php include 'consulta.permiso.php'; ?>
</div>