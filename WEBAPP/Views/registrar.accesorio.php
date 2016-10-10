<!-- Jhon T. Gómez -->
<?php require_once '../Model/conexion.php'; include '../Model/accesorio.class.php'; ?>

    <div class="container">
  	 	<div class="card">
  			<div class="card-action grey darken-3">
          <a href="dashboard.php?seccion=rr_producto" class="btn-floating grey darken-3 z-depth-0 "><i class="material-icons orange-text">keyboard_backspace</i></a>
          <button type="button" class="btn grey darken-3 z-depth-0 thin" style="margin-left:32%">Registro de Accesorios</button>
        </div>
  	    <div class="card-content">
          <div class="row">
            <form class="col s12" action="../Controller/accesorio.controller.php" method="post" <?php $datos = new Consulta; ?>>
       				  <div class="row">
                  <div class="row">
                    <div class="input-field col s6">
          						<i class="material-icons prefix teal-text">people</i>
          					 		<select class="icons" name="com">
          					 	    <option value="" disabled selected>Componente</option>
          					 			<?php $compo = $datos->Consultar_Componente(); foreach ($compo as $dato): ?>
          					 		  <option value="<?php echo $dato["compo_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $dato["compo_nombre"]; ?></option>
          					 			<?php endforeach ?>
          					 		</select>
          					  <label>Seleccione Componente</label>
          					</div>
                    <div class="input-field col s6">
          						<i class="material-icons prefix teal-text">people</i>
          					 		<select class="icons" name="reg">
          					 	    <option value="" disabled selected>Codigo</option>
          					 			<?php $regi = $datos->Consultar_Registro(); foreach ($regi as $dato): ?>
          					 		  <option value="<?php echo $dato["regi_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $dato["regi_cod"]; ?></option>
          					 			<?php endforeach ?>
          					 		</select>
          					  <label>Codigo de registro</label>
          					</div>
                  </div>
                  <div class="input-field col s6">
       					 		 <i class="material-icons prefix grey-text">credit_card</i>
       							 <input  type="color" name="col" class="validate" required>
       	  				</div>
       						<div class="input-field col s6">
       				       <i class="material-icons prefix grey-text">dns</i>
       				       <input id="icon_prefix" type="text" name="can" class="validate" required>
       				       <label for="icon_prefix">Cantidad</label>
       				    </div>
                </div>
                <div class="card-action grey lighten-3">
                  <button class="waves-effect waves-light btn teal thin" name="g">Guardar</button>
                  <a class="activator waves-effect waves-light btn grey darken-2  thin" href="#">Consultar accesorio</a>
                  </form>
                </div>
              </div>
            </div>
    	    <div class="card-reveal">
    	      <span class="card-title grey-text text-darken-4">Consulta de Accesorios<i class="material-icons right">close</i></span>
    	      <?php include 'consultar.accesorio.php'; ?>
    	    </div>
  	     </div>
  	    </div>
