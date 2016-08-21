<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
require_once("../Model/marca.class.php");

$tipopro=Gestion_Tipoproducto::cargar_tipo();
$marca=Gestion_Marca::Cargar_marca();
?>
<div class="container">



			<form action="../Controller/producto.controller.php" method="POST">
				<h5>Registro de productos</h5><hr>

				<label>Codigo del producto<br></label>
				<input type="text" name="txt_codpro"/></br>
				<label>Codigo del tipo de producto<br></label>
					<select name="txt_tipopro">
						<?php
						foreach ($tipopro as $tipopros) {
						echo "<option value=".$tipopros["tipopro_cod"].">".$tipopros["tipopro_nombre"]."</option>";
					}
					?>
				</select><br>
				<label>Codigo de marca<br></label>
				<select name="txt_marcapro">
					<?php
					foreach ($marca as $marcas) {
					echo "<option value=".$marcas["marca_cod"].">".$marcas["marca_nombre"]."</option>";
				}
				?>
			</select><br>
				<label>Descripcion del producto<br></label>
				<input type="text" name="txt_descpro"/></br><br>
				<button class="waves-effect waves-light btn "  name="accion" value="create">Guardar</button><br>
				<?php echo @$_REQUEST["$mensaje"]; ?><br>

				<?php echo "<a href='registro.marca.php' class='waves-effect waves-light btn green'>Registro de marca</a>"; ?>
				<?php echo "<a href='registro.tipoproducto.php' class='waves-effect waves-light btn red'>Registro de tipo producto</a>"; ?>
			</form>



</div>
