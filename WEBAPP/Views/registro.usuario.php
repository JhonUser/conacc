<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$rol =Gestion_usuario::cargar_rol();
?>

<div class="container">
	<h5>Registro de Usuario</h5>
	<form action="../Controller/registro.controller.php" method="post">

			<select name="seleccion" class="browser-default purple white-text" >
				<option  disabled selected>Elija un Rol<br></option>
				 <?php
					 foreach ($rol as $roles) {
							echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
					}
				?>
		  </select>



			 <label>Nombre</label>
				 <input name="nombre"  type="text" class="validate" >



				 <label for="icon_apellido">Apellido</label>
					<input name="apellido" id="icon_apellido" type="text" class="validate"required >


	 <label for="icon_documento">Docuentos de Identidad</label>

 				 <input name="documento" id="icon_documento" type="number" class="validate"required >


 <label for="icon_telephone">Usuario</label>

				 <input name="nombredeusuario" id="icon_telephone" type="text" class="validate" required>



		<label for="icon_email">Email</label>
				<input name="email" id="icon_email" type="email" class="validate" required>


 <label for="icon_telephone">Telefono</label>
				 <input name="telefono" id="icon_telephone" type="number" class="validate"required >




	 <label for="icon_telephone">Contraseña</label>
				 <input name="contrasena" id="icon_telephone" type="password" class="validate"required >



		<button class="waves-effect waves-light btn blue" value="Guardar" name="action">Guardar</button>
		<a href="consulta.usuario.php">Consultar</a>
 		
	 </form>
 </div>
