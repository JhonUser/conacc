<!-- Jhon T. Gómez -->
<?php require_once '../Model/conexion.php'; include '../Model/accesorio.class.php'; ?>
  <section >
    <a href="dashboard.php?seccion=rr_producto" class="btn-floating z-depth-0 teal darken-2"><i class="material-icons">keyboard_backspace</i></a>
 		<div class="row">
      <form class="col s10" action="../Controller/accesorio.controller.php" method="post" <?php $datos = new Consulta; ?>>
        <center><h4 class="thin">Registro de Accesorio</h4></center>
 				  <div class="row">
            <div class="input-field col s7">
  						<i class="material-icons prefix teal-text">people</i>
  					 		<select class="icons" name="com">
  					 	    <option value="" disabled selected>Componente</option>
  					 			<?php $compo = $datos->Consultar_Componente(); foreach ($compo as $dato): ?>
  					 		  <option value="<?php echo $dato["compo_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $dato["compo_nombre"]; ?></option>
  					 			<?php endforeach ?>
  					 		</select>
  					  <label>Seleccione Componente</label>
  					</div>
            <div class="input-field col s7">
  						<i class="material-icons prefix teal-text">people</i>
  					 		<select class="icons" name="reg">
  					 	    <option value="" disabled selected>Codigo</option>
  					 			<?php $regi = $datos->Consultar_Registro(); foreach ($regi as $dato): ?>
  					 		  <option value="<?php echo $dato["regi_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $dato["regi_cod"]; ?></option>
  					 			<?php endforeach ?>
  					 		</select>
  					  <label>Codigo de registro</label>
  					</div>
            <div class="input-field col s6">
 					 		 <i class="material-icons prefix grey-text">credit_card</i>
 							 <input  type="text" name="col" class="validate" required>
 							 <label for="email">Color</label>
 	  				</div>
 						<div class="input-field col s6">
 				       <i class="material-icons prefix grey-text">dns</i>
 				       <input id="icon_prefix" type="text" name="can" class="validate" required>
 				       <label for="icon_prefix">Cantidad</label>
 				    </div>
   					<div class="col s7">
   						<button class="waves-effect waves-light btn teal right thin" name="g">Guardar</button>
   					</div>
          </div>
        </form>
      </div>
    </section>

    <section>
      <?php include 'consultar.accesorio.php'; ?>
    </section>
