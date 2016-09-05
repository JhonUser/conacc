<?php
  require_once '../Model/conexion.php';
  require_once '../Model/marca.class.php';

  $codigo = Gestion_Marca::Consuta_codigo($_GET["codigo_marca"]);
 ?>
  <!-- Formulario de modificar Marcas-->
  <form action="../Controller/marca.controller.php" method="post" 
    <form class="col s12" action="../Controller/marca.controller.php" method="POST" enctype="multipart/form-data">
      <h1>Modificar marca</h1>
      <label>Nombre:</label>
        <input type="text" name="txt_codmarca" value=" <?php echo $codigo["marca_cod"]; ?>" required/>
      <label>Nombre:</label>
        <input type="text" name="txt_nommarca" value=" <?php echo $codigo["marca_nombre"]; ?>" required/>
      <label>Logo:</label>
        <input type="file" name="img_logomarca" required/>
      <button name="accion" value="Update">Modificar</button>
  </form>
  <a href="consulta.rol.php">Volver</a>
  <a href="registro.rol.php">Crear rol</a>