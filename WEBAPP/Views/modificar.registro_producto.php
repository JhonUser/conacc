<!-- Andrea taborda -->
<?php
  require_once("../model/conexion.php");
  require_once("../model/registro.producto.class.php");

  $producto=Gestion_producto::consultarprodu();
  $codigoP = Gestion_producto::consultaP($_GET["producto"]);
 ?>
 <div class="container">
    <div class="card">
      <div class="card-action teal darken-3">
        <button type="button" class="btn teal darken-3 z-depth-0 white-text thin" style="margin-left:32%">Modificar asignacion de productos</button>
      </div>
      <div class="card-content">
        <form action="../Controller/controller.registro.producto.php" method="post">

          <div class="row">
          <input type="hidden" name="codigo_regi" value="<?php echo $codigoP["regi_cod"]; ?>">
            <div class="input-field col s5">
              <i class="material-icons prefix grey-text">people</i>
              <select name="codigo_pro">
              <?php
                foreach ($producto as $produc) {
                   echo "<option value='".$produc["produ_cod"]."'";
                  if($produc["produ_cod"]==$codigoP["produ_cod"]){
                     echo "selected";
                  }
                  echo ">".$produc["tipopro_nombre"]."-".$produc["marca_nombre"]."</option>";
                 
                   }
              ?>
            </select>
            <label>Producto</label>
            </div>
            <label >Serial: *</label>
            <div class="input-field col s6">
              <i class="material-icons prefix grey-text">fingerprint</i>
              <input type="text" id="icon_prefix" value="<?php echo $codigoP["regi_serial"]; ?>" name="registro_serial">
              
            </div>
            <!-- <div class="input-field col s1">
              <a href="dashboard.php?seccion=r_t_producto" class="btn-floating btn-large waves-effect waves-light red pull-s5"><i class="material-icons">add</i></a>
            </div>

            <div class="input-field col s1">
              <a href="dashboard.php?seccion=r_marca" class="btn-floating btn-large waves-effect waves-light red pull-s5"><i class="material-icons">add</i></a>
            </div> -->
          </div>
          <div class="row">
            <label >Autorizacion Alterna: *</label>
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text">accessibility</i>
              <input type="text" id="icon_prefix" value="<?php echo $codigoP["regi_autoalterna"]; ?>" name="registre_autoalerta">
              
            </div>
          </div>
          <!-- Colocar fecha en el controlador -->
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix grey-text">color_lens</i>
              <input  type="color" id="icon_prefix" value="<?php echo $codigoP["regi_color"]; ?>" name="registre_color" style="width:100px;height:40px;">
            </div>
            <label>Descripción: *</label>
            <div class="input-field col s6">
              <i class="material-icons prefix grey-text">description</i>
              <input  type="text" id="icon_prefix" value="<?php echo $codigoP["regi_desc"]; ?>"name="registre_decrip">
              
            </div>
          </div>


        <div class="card-action grey lighten-3">
          <button name="action" class="btn thin" value="modificar">Modificar</button>
         
          </form>
        </div>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>