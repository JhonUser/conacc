<?php
require '../Model/conexion.php';
  require '../Model/propietario.class.php';
  $codigo = registro::datos_modificar($_GET["codigo"]);

?>
 <!-- Formulario Registro y modificacion de propietarios -->
  <div class="container">
    <h3>Registro de Propietarios</h3>
    ../Controller/propietario.controller.php

      <form action="../Controller/propietario.controller.php?accion=
      <?php echo $codigo > 0 ? 'actualizar' : 'registrar'; ?>" method="post">

        <label for="cod">Codigo del propietario</label>
          <input type="text" name="cod" id="cod" value="<?php echo $codigo['propie_cod']; ?>"   required>
        <label for="ced">CC / T.I</label>
          <input type="text" name="ced" id="ced" value="<?php echo $codigo['propie_docu']; ?>"  required>
        <label for="nom">Nombre</label>
          <input type="text" name="nom" id="nom" value="<?php echo $codigo['propie_nombre']; ?>"required>
        <label for="ape">Apellido</label>
          <input type="text" name="ape" id="ape" value="<?php echo $codigo['propie_apelli']; ?>"required>
        <label for="tel">Telefono</label>
          <input type="number" name="tel" id="tel" value="<?php echo $codigo['propie_tel']; ?>" required>
        <label for="dir">Direccion</label>
          <input type="text" name="dir" id="dir" value="<?php echo $codigo['propie_dire']; ?>"  required>
        <label for="ema">Email</label>
          <input type="email" name="ema" id="ema" value="<?php echo $codigo['propie_email']; ?>"required>
        <label for="cen">Centro</label>
          <input type="text" name="cen" id="cen" value="<?php echo $codigo['propie_centro']; ?>"required>
        <label for="car">Cargo</label>
          <input type="text" name="car" id="car" value="<?php echo $codigo['propie_cargo']; ?>" required>

        <button class="right btn green" name="accion" value="registro">Guardar</button>


      </form>
      <a href="inicio.php?seccion=c.propietario">ir a consulta</a>

  </div>
