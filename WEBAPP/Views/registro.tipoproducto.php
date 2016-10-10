	<div class="container">
		<div class="card">
			<div class="card-action cyan darken-4">
	      <button type="button" class="btn cyan darken-4 z-depth-0 white-text thin" style="margin-left:28%">Registro de Tipos de productos</button>
	    </div>
	    <div class="card-content">
				<form action="../Controller/tipoproducto.controller.php" method="POST">
					<div class="input-field col s11">
						<i class="material-icons prefix grey-text">code</i>
						<input type="text" name="txt_tipoprocod"/>
						<label>Codigo:</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix grey-text">assignment</i>
						<input type="text" name="txt_tipopronom"/>
						<label>Nombre:</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix grey-text">subtitles</i>
						<input type="text" name="txt_desctipopro">
						<label>Descripción:</label>
					</div>
					<div class="card-action grey lighten-3">
						<button name="accion" value="create" class="btn cyan darken-4 thin">Guardar</button>
						<?php echo @$_REQUEST["$mensaje"];?>
						<a class="activator waves-effect waves-light btn grey thin" href="#">Consultar</a>
						<a href="dashboard.php?seccion=rr_producto" class="btn indigo thin right">Ir a Registro producto</a>
					</form>
				</div>
	  	</div>
			<div class="card-reveal">
		  	<span class="card-title grey-text text-darken-4">Consulta de Tipos de productos<i class="material-icons right">close</i></span>
		  	<?php include 'consulta.tipoproducto.php'; ?>
			</div>
		</div>
	</div>
