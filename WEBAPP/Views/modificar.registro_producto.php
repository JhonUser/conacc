<?php
  require_once("../Model/conexion.php");
  require_once("../Model/registro.producto.class.php");

  $codigo = Gestion_producto::consultarP($_GET["producto"]);

 ?>
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->
  <form action="../controller/controller.registro.producto.php" method="post">
      <h1>Modificar</h1>

      <label>Codigo de usuario</label>
        <input type="hidden" name="codigo_usu" readonly value="<?php echo $codigo["usu_cod"]; ?>">

      <label>codigo de producto</label>
        <input type="text" name="produ_cod" value=" <?php echo $codigo["produ_cod"]; ?>" />

      <label>codigo de propietario</label>
        <input type="text" name="propie_cod" value=" <?php echo $codigo["propie_cod"]; ?>"/>

        <label>registro serial</label>
        <input type="text" name="regi_serial" value=" <?php echo $codigo["regi_serial"]; ?>"/>

      <label>registro color</label>
        <input type="text" name="regi_color" value=" <?php echo $codigo["regi_color"]; ?>"/>

      <label>registro fecha</label>
        <input type="text" name="regi_fecha" value=" <?php echo $codigo["regi_fecha"]; ?>"/>

      <label>registro descripcion</label>
        <input type="text" name="regi_desc" value=" <?php echo $codigo["regi_desc"]; ?>"/>

      <label>registro autoalterna</label>
        <input type="text" name="regi_autoalterna" value=" <?php echo $codigo["regi_autoalterna"]; ?>"/>  

      



      <button name="action" value="Update">Modificar</button>
  </form>
  <button><a href="consulta.registro_producto.php">Volver</a></button>
 
