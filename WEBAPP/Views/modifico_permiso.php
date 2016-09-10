<?php
//Modifico_permiso.php
require_once("../Model/conexion.php");
require_once("../Model/permiso.class.php");
require_once("../Model/usuario.class.php");
require_once("../Model/permiso.class.php");
$rol=Gestion_usuario::cargar_rol();
$modulo=Gestion_permiso::Cargar_modulo();
$codigo =Gestion_permiso::Consultarporcodigo($_GET["codigo_permi"]);
?>
	<!-- Formulario: Modificar permiso -->
	
	<form action="../Controller/permiso.controller.php" method="POST">
	<h1>Modificar usuario</h1>
	<br>
			<input type="hidden" name="permi_cod" value=" <?php echo $codigo["permi_cod"]; ?>"required/>
				<br>
	<label>Rol</label>
	<select name="sele_rol">
		<?php
		foreach ($rol as $roles) {
		echo "<option value='".$roles["rol_cod"]."'";  
			 if($roles["rol_cod"] == $codigo["rol_cod"]){
			 	echo "selected";
			 } 
		echo ">".$roles["rol_nombre"]."</option>";
	}
	?>
	</select>
	<br>
	<label>Modulo</label>
	<select name="sele_modu">
		<?php
		foreach ($modulo as $modulos) {
		echo "<option value='".$modulos["modu_cod"]."'";
			 if($modulos["modu_cod"] == $codigo["modu_cod"]){
			 	echo "selected";
			 } 


		echo ">".$modulos["modu_nom"]."</option>";

 	
	}
	?>
	</select>
		<br>
		<label>Estado del permiso</label>
			<input type="text" name="estado_permi" value=" <?php echo $codigo["estado_permi"]; ?>"required/>
				<br>
		<label>Modulo del permiso</label>
			<input type="text" name="modulo_permi" value=" <?php echo $codigo["modulo_permi"]; ?>"required/>
				<br>
	<button value="Modificar" name="accion">Modificar</button>
	</form>
	<a href="consulta.permiso.php">Volver</a>
	<a href="registro.permiso.php">Crear permiso</a>