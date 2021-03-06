<!-- Jeison V. Calle -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
require_once("../Model/marca.class.php");

$tipopro=Gestion_Tipoproducto::cargar_tipo();
$marca=Gestion_Marca::Cargar_marca();
?>
<div class="container">
		<div class="card">
			<div class="card-action blue-grey">
          		<button type="button" class="btn blue-grey z-depth-0 white-text thin" style="margin-left:32%">Registro de productos</button>
        	</div>
        	<div class="card-content">
        	<div class="row">
			<form class="col s12" action="../Controller/producto.controller.php" method="POST">
<!-- 
				<label>Codigo del producto<br></label>
				<input type="text" name="txt_codpro"/></br> -->
				<div class="col s11">
					<label>Tipo de producto<br></label>
						<select name="txt_tipopro">
							<?php
							foreach ($tipopro as $tipopros) {
							echo "<option value=".$tipopros["tipopro_cod"].">".$tipopros["tipopro_nombre"]."</option>";
						}
						?>
					</select>
				</div>
				<div class="col s11">
				<label>Marca<br></label>
				<select name="txt_marcapro">
					<?php
					foreach ($marca as $marcas) {
					echo "<option value=".$marcas["marca_cod"].">".$marcas["marca_nombre"]."</option>";
				}
				?>
			</select>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix grey-text">description</i>
				<input id="icon_prefix" type="text" name="txt_descpro" class="validate" required>
				<label for="icon_prefix">Descripcion del producto</label>
			</div>

			<div class="col s12">
				<button class="waves-effect waves-light btn "  name="accion" value="create">Guardar</button>
			</div>
				<?php echo @$_REQUEST["$mensaje"]; ?><br>
				<a href="dashboard.php?seccion=r_t_producto"style="margin-left: 101%; margin-top: -80%;" class="btn-floating btn-large waves-effect waves-light red pull-s5"><i class="material-icons">add</i></a>
				<a href="dashboard.php?seccion=r_marca"style="margin-left: 101%; margin-top: -60%;" class="btn-floating btn-large waves-effect waves-light red pull-s5"><i class="material-icons">add</i></a>
				
			</form>
			</div>
			</div>

</div>

</div>
<div class="container">
	<?php include 'consulta.producto.php'; ?>
</div>
