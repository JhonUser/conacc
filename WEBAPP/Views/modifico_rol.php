<?php
  require_once '../Model/conexion.php';
  require_once '../Model/rol.class.php';

  $codigo = Gestion_rol::Consultarporcodigo($_GET["codigo_rol"]);
 ?>
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->
  <form action="../Controller/guardarrol.php" method="post">
      <h1>Modificar Usuario</h1>
      <label>Codigo:<?php echo $codigo["rol_cod"]; ?></label>
        <input type="hidden" name="txt_codrol" readonly value="<?php echo $codigo["rol_cod"]; ?>">
      <label>Nombre:</label>
        <input type="text" name="txt_nomrol" value=" <?php echo $codigo["rol_nombre"]; ?>" required/>
      <label>Descripción:</label>
        <input type="text" name="txt_descrol" value=" <?php echo $codigo["rol_desc"]; ?>" required/>
      <button name="action" value="Update">Modificar</button>
  </form>
  <a href="consulta.rol.php">Volver</a>
  <a href="registro.rol.php">Crear rol</a>
