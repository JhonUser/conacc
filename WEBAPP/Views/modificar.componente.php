<?php
  require_once("../Model/conexion.php");
  require_once("../Model/componente.class.php");

  $codigo = Gestion_componente::consultaC($_GET["codigo_component"]);

 ?>
<section>
<a href="dashboard.php?seccion=r_componente" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->
  <form action="../controller/controller.componente.php" method="post">
      <center><h4 class="thin">Modificar modulo</h4></center>

      <label>Codigo:<?php echo $codigo["compo_cod"]; ?></label>
        <input type="hidden" name="codigo_compo" readonly value="<?php echo $codigo["compo_cod"]; ?>"/>
     
      <label>Nombre:</label>
        <input type="text" name="nombre_compo" value=" <?php echo $codigo["compo_nombre"]; ?>" required/>

      <label>Cantidad:</label>
        <input type="text" name="cantidad_compo" value=" <?php echo $codigo["compo_cant"]; ?>" required/>
      <button class="btn" name="action" value="Update">Modificar</button>
  </form>
</section>
 
