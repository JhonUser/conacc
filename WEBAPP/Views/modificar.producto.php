<?php
  require_once("../Model/conexion.php");
  require_once("../Model/producto.class.php");
require_once("../Model/tipoproducto.class.php");
require_once("../Model/marca.class.php");

  $tipopro=Gestion_Tipoproducto::cargar_tipo();
  $marca=Gestion_Marca::Cargar_marca();
  $codigo = Gestion_Producto::Consultarporcodigo($_GET["codigo_pro"]);
 ?><br>
 <div class="row">
 <div class="col s9 offset-s3"
 <section>
   <a href="dashboard.php?seccion=producto" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->
  <form action="../Controller/producto.controller.php" method="post"><br>
    <center><h4 class="thin">Modificar producto</h4></center>
        <input type="hidden" name="txt_codpro" readonly value="<?php echo $codigo["produ_cod"]; ?>">
        
        <label>Tipo de producto</label>
          <select name="txt_tipopro">
            <?php
            foreach ($tipopro as $tipos) {
            echo "<option value='".$tipos["tipopro_cod"]."'";  
               if($tipos["tipopro_cod"] == $codigo["tipopro_cod"]){
                echo "selected";
               } 
            echo ">".$tipos["tipopro_nombre"]."</option>";
          }
          ?>
          </select>
          <br>

          <label>Marca</label>
          <select name="txt_marcapro">
            <?php
            foreach ($marca as $marcas) {
            echo "<option value='".$marcas["marca_cod"]."'";  
               if($marcas["marca_cod"] == $codigo["marca_cod"]){
                echo "selected";
               } 
            echo ">".$marcas["marca_nombre"]."</option>";
          }
          ?>
          </select>
          <br>
          <br>
        <br>
    <label>Descripcion</label>
      <input type="text" name="txt_descpro" value=" <?php echo $codigo["produ_desc"]; ?>"required/>
        <br>
      <button name="accion" class="btn teal thin right" value="Update">Modificar</button>
  </form>

</section>
</div>
</div>