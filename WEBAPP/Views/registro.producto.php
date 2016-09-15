<!-- Jeison V. Calle -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
require_once("../Model/marca.class.php");

$tipopro=Gestion_Tipoproducto::cargar_tipo();
$marca=Gestion_Marca::Cargar_marca();
?>
<div class="container">
		<center class="">Registro de productos</center>
			<form class="col s12" action="../Controller/producto.controller.php" method="POST">
<!-- 
				<label>Codigo del producto<br></label>
				<input type="text" name="txt_codpro"/></br> -->
				<div class="col s6">
					<label>Tipo de producto<br></label>
						<select name="txt_tipopro">
							<?php
							foreach ($tipopro as $tipopros) {
							echo "<option value=".$tipopros["tipopro_cod"].">".$tipopros["tipopro_nombre"]."</option>";
						}
						?>
					</select>
				</div>

				<label>Marca<br></label>
				<select name="txt_marcapro">
					<?php
					foreach ($marca as $marcas) {
					echo "<option value=".$marcas["marca_cod"].">".$marcas["marca_nombre"]."</option>";
				}
				?>
			</select><br>

			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">description</i>
				<input id="icon_prefix" type="text" name="txt_descpro" class="validate" required>
				<label for="icon_prefix">Descripcion del producto</label>
			</div>

			<div class="col s7">
				<button class="waves-effect waves-light btn "  name="accion" value="create">Guardar</button>
			</div>
				<?php echo @$_REQUEST["$mensaje"]; ?><br>

				<?php echo "<a href='dashboard.php?seccion=r_marca' class='waves-effect waves-light btn green'>Registro de marca</a>"; ?>
				<?php echo "<a href='dashboard.php?seccion=r_t_producto' class='waves-effect waves-light btn red'>Registro de tipo producto</a>"; ?>
			</form>



</div>
<div class="container">
	<?php include 'consulta.producto.php'; ?>
</div>
