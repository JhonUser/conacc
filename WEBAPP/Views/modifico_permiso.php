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
<<<<<<< HEAD
<<<<<<< HEAD
	<section>
		<a href="dashboard.php?seccion=r_permiso" class="btn-floating z-depth-0 teal darken-2"><i class="material-icons">keyboard_backspace</i></a>


	<form action="../Controller/permiso.controller.php" method="POST">
	<h4>Modificar permiso</h4>
=======
<section>
<a href="dashboard.php?seccion=r_permiso" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>	
	<form action="../Controller/permiso.controller.php" method="POST">
	<center><h4 class="thin">Modificar permiso</h4></center>
>>>>>>> origin/master
=======
<section>
<a href="dashboard.php?seccion=r_permiso" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>	
	<form action="../Controller/permiso.controller.php" method="POST">
	<center><h4 class="thin">Modificar permiso</h4></center>
>>>>>>> bc2ececf64e412e51bca382338c595c94e8e386e
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
<<<<<<< HEAD
<<<<<<< HEAD
	<button value="Modificar" class="btn thin" name="accion">Modificar</button>
	</form>


		</section>
=======
	<button value="Modificar" class="btn teal thin right" name="accion">Modificar</button>
	</form>

</section>
>>>>>>> origin/master
=======
	<button value="Modificar" class="btn teal thin right" name="accion">Modificar</button>
	</form>

</section>
>>>>>>> bc2ececf64e412e51bca382338c595c94e8e386e
