<?php
  require_once '../Model/conexion.php';
  require_once '../Model/marca.class.php';

  $codigo = Gestion_Marca::Consuta_codigo($_GET["codigo_marca"]);
 ?>
  <!-- Formulario de modificar Marcas-->
  <section>
   <a href="dashboard.php?seccion=marca" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>
    <form class="col s12" action="../Controller/marca.controller.php" method="POST" enctype="multipart/form-data">
    <center><h4 class="thin">Modificar Marca</h4></center>
        <input type="hidden" name="txt_codmarca" value=" <?php echo $codigo["marca_cod"]; ?>" required/>
      <label>Nombre:</label>
        <input type="text" name="txt_nommarca" value=" <?php echo $codigo["marca_nombre"]; ?>" required/>
      <label>Logo:</label>
        <input type="file" name="img_logomarca"/>
      <button name="accion" class="btn teal thin right" value="Update">Modificar</button>
  </form>
  </section>