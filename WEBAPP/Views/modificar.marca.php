<?php
  require_once '../Model/conexion.php';
  require_once '../Model/marca.class.php';

  $codigo = Gestion_Marca::Consuta_codigo($_GET["codigo_marca"]);
 ?>
  <!-- Formulario de modificar Marcas-->
  <form action="../Controller/marca.controller.php" method="post">
      <h1>Modificar marca</h1>
      
      <label>Nombre:</label>
        <input type="text" name="txt_nommarca" value=" <?php echo $codigo["marca_nombre"]; ?>" required/>
      <label>Logo:</label>
        <input type="file" name="img_logomarca" value=" <?php echo $codigo["marca_logro"]; ?>" required/>
      <button name="accion" value="Update">Modificar</button>
  </form>
  <a href="consulta.rol.php">Volver</a>
  <a href="registro.rol.php">Crear rol</a>