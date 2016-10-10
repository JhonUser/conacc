<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';
  $tipo = Gestion_Tipoproducto::ConsultarPorCodigo($_GET["tipopro_cod"]);
?>
<div class="container">
  <div class="card">
    <div class="card-action  blue-grey lighten-5">
      <a href="dashboard.php?seccion=r_t_producto" class="btn-floating z-depth-0 blue-grey"><i class="material-icons">keyboard_backspace</i></a>

      <button type="button" class="btn blue-grey z-depth-0 white-text thin" style="margin-left:28%">Modificar Tipo producto</button>

    </div>
    <div class="card-content">
      <form action="../Controller/tipoproducto.controller.php" method="POST">
          <input type="hidden" name="txt_tipoprocod" readonly value="<?php echo $tipo["tipopro_cod"]; ?>">
          <label>Nombre:</label>
          <input type="text" name="txt_tipopronom" value="<?php echo $tipo["tipopro_nombre"]; ?>"/>
          <label>Descripción:</label>
          <input type="text" name="txt_desctipopro" value="<?php echo $tipo["tipopro_desc"]; ?>"><br><br>
        <div class="card-action grey lighten-3">
          <button name="accion" class="btn blue-grey thin" value="update">Modificar</button>
    		  <?php echo @$_REQUEST["$mensaje"];?>
        </form>
      </div>
    </div>
  </div>
</div>
