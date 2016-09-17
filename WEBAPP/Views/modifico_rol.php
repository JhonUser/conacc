<?php
  require_once '../Model/conexion.php';
  require_once '../Model/rol.class.php';

  $codigo = Gestion_rol::Consultarporcodigo($_GET["codigo_rol"]);
 ?><br>
 <div class="container">
 	<div class="row">
 	    <div class="card">
 				<div class="card-action red darken-4">
 					<a href="dashboard.php?seccion=rol" class="btn-floating z-depth-0 red darken-4"><i class="material-icons">keyboard_backspace</i></a>
 					<button type="button" class="btn red darken-4 z-depth-0 white-text thin" style="margin-left:25%">Modificar Accesorio</button>
 				</div>
 	      <div class="card-content">
  <form action="../Controller/guardarrol.php" method="post"><br>
    <center><h4 class="thin">Modificar Rol</h4></center>
        <input type="hidden" name="txt_codrol" readonly value="<?php echo $codigo["rol_cod"]; ?>">
      <label>Nombre:</label>
        <input type="text" name="txt_nomrol" value=" <?php echo $codigo["rol_nombre"]; ?>" required/>
      <label>Descripción:</label>
        <input type="text" name="txt_descrol" value=" <?php echo $codigo["rol_desc"]; ?>" required/><br>
        <div class="card-action grey lighten-3">
      <button name="action" class="btn teal thin" value="Update">Modificar</button>
  </form>

</div>
</div>
</div>
</div>
