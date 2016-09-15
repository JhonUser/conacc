<?php require_once("../Model/conexion.php"); require_once("../Model/accesorio.class.php"); ?><br>

<div class="container">
	<div class="row">
	    <div class="card">
				<div class="card-action teal darken-2">
					<a href="dashboard.php?seccion=r_rol" class="btn-floating z-depth-0 teal darken-2"><i class="material-icons">keyboard_backspace</i></a>
					<button type="button" class="btn teal darken-2 z-depth-0 white-text thin" style="margin-left:25%">Modificar Accesorio</button>
				</div>
	      <div class="card-content">

					<form action="../Controller/accesorio.controller.php" method="post" <?php $codigo=Consulta::Datos_Modificar($_GET["cod"]); ?>>
						<input type="hidden" name="cod" value="<?php echo $codigo["acce_cod"]; ?>" required>
						<div class="input-field">

  						<i class="material-icons prefix teal-text">people</i>
  					 		<select class="icons" name="com">
  					 	    <option value="" disabled selected>Componente</option>
  					 			<?php $compo = Consulta::Consultar_Componente(); foreach ($compo as $dato): ?>
  					 		  <option value="<?php echo $dato["compo_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $dato["compo_nombre"]; ?></option>
  					 			<?php endforeach ?>
  					 		</select>
  					  <label>Seleccione Componente</label>
  					</div>
            <div class="input-field">
  						<i class="material-icons prefix teal-text">people</i>
  					 		<select class="icons" name="reg">
  					 	    <option value="" disabled selected>Codigo</option>
  					 			<?php $regi = Consulta::Consultar_Registro(); foreach ($regi as $dato): ?>
  					 		  <option value="<?php echo $dato["regi_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $dato["regi_cod"]; ?></option>
  					 			<?php endforeach ?>
  					 		</select>
  					  <label>Codigo de registro</label>
  					</div>

						<label for="email">Color</label>
						<input id="email" type="text" name="col" class="validate" value="<?php echo $codigo['acce_col']; ?>" required>

						<label for="icon_prefix">Cantidad</label>
						<input id="icon_prefix" type="text" name="can" class="validate" value="<?php echo $codigo['acce_can']; ?>" required>


					 </div>
	         <div class="card-action grey lighten-3">
	          <button class="btn teal thin" name="m"><i class="material-icons right">send</i>Modificar</button>
	         </div>
					</form>
	      </div>
			</div>
    </div>
