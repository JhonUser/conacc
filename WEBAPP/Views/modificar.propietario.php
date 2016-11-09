<!-- Jhon T. Gómez -->
<?php require_once("../Model/conexion.php"); require_once("../Model/propietario.class.php"); ?><br>

<div class="container">


	<div class="row">
	        <div >
	          <div class="card">
							<div class="card-action teal darken-2">
							<a href="dashboard.php?seccion=r.propietario' ?>" class="btn-floating z-depth-0 teal darken-2"><i class="material-icons">keyboard_backspace</i></a>
							<button type="button" class="btn teal darken-2 z-depth-0 white-text thin" style="margin-left:25%">Modificar propietario</button>

							</div>

	            <div class="card-content">

								<form action="../Controller/propietario.controller.php" method="post" <?php
								$codigo = registro::datos_modificar($_GET["cod"]); ?>>

										<input type="hidden" name="cod" value="<?php echo $codigo["prop_cod"]; ?>" required>
										<label for="ced">CC / T.I*</label>
										<input type="text" name="ced"  id="ced" value="<?php echo $codigo["prop_doc"]; ?>" required>
										<label for="nom">Nombre*</label>
										<input type="text" name="nom"  id="nom" value="<?php echo $codigo["prop_nom"]; ?>" required>
										<label for="ape">Apellido*</label>
										<input type="text" name="ape"  id="ape" value="<?php echo $codigo["prop_ape"]; ?>" required>
										<label for="tel">Telefono*</label>
										<input type="number"name="tel" id="tel" value="<?php echo $codigo["prop_tel"]; ?>" required>
										<label for="dir">Direccion*</label>
										<input type="text"  name="dir" id="dir" value="<?php echo $codigo["prop_dir"]; ?>" required>
										<label for="ema">Email*</label>
										<input type="email" name="ema" id="ema" value="<?php echo $codigo["prop_ema"]; ?>" required>
									<div class="row">
										<div class="input-field col s6">
											<i class="material-icons prefix grey-text">people</i>
											<select name="car">
											 <option value="Instructor">Instructor</option>
											 <option value="Aprendiz">Aprendiz</option>
											 <option value="Administrativo">Administrativo</option>
											 <option value="Vigilante">Vigilante</option>
											 <option value="Visitante">Visitante</option>
											</select>
										<label>Cargo</label>
										</div>
										<div class="input-field col s6">
											<i class="material-icons prefix grey-text">people</i>
											<select name="cen">
											 <option value="CDMC">CDMC</option>
											 <option value="Mobiliario">C. Mobiliario</option>
											 <option value="Confeccion y Moda">C. Confeccion y Moda</option>
											</select>
										<label>Centro</label>
										</div>
									</div>


	            </div>
	            <div class="card-action grey lighten-3">
	            <button class="btn teal thin" name="m"><i class="material-icons right">send</i>Modificar</button>
	            </div>
							</form>
	          </div>

	      </div>
</div>
