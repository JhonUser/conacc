<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
require_once("../Model/marca.class.php");
$tipopro= Gestion_Tipoproducto::cargar_tipo();
$marca= Gestion_Marca::Cargar_marca();
?>
<div class="container">


<form action="../Controller/controller.producto.php" method="post">
	<label>Codigo del producto</label>
	<input type="text" name="txt_codprodu"/><br>

	<label>Tipo de producto</label>
		<select name="sele_tipopro">
				<option  disabled selected>Elija un tipo de producto</option>
				 	<?php
					 	foreach ($tipopro as $tipos) {
							echo "<option value=".$tipos["tipopro_cod"].">".$tipos["tipopro_nombre"]."</option>";
						}
					?>
		</select><br>

	<label>Marca</label>
		<select name="sele_marca">
				<option  disabled selected>Elija una marca</option>
				 	<?php
					 	foreach ($marca as $marcas) {
							echo "<option value=".$marcas["marca_cod"].">".$marcas["marca_nombre"]."</option>";
					}
				?>
		</select><br>

	<label>Descripcion</label>
		<input type="text" name="txt_desc"/>
			<br>

	<button value="Guardar" name="action">Guardar</button>
	<form>
	</div>
