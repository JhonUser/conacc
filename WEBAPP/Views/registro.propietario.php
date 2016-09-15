<!-- Jhon T. Gómez -->
<div class="container">
 <div class="row">
		 <div class="card">
			 <div class="card-action teal">
				 <button type="button" class="btn teal z-depth-0 white-text thin" style="margin-left:25%">Registro de propietario</button>
			 </div>
			 <div class="card-content">

 		<div class="row">
      <form class="col s12" action="../Controller/propietario.controller.php" method="post">
 				  <div class="row">
            <div class="input-field col s6">
 					 		 <i class="material-icons prefix grey-text">credit_card</i>
 							 <input id="email" type="number" name="ced" class="validate" required>
 							 <label for="email">Cedula</label>
 	  				</div>
 						<div class="input-field col s6">
 				       <i class="material-icons prefix grey-text">account_circle</i>
 				       <input id="icon_prefix" type="text" name="nom" class="validate" required>
 				       <label for="icon_prefix">Nombre</label>
 				    </div>
 				    <div class="input-field col s6">
 				       <i class="material-icons prefix grey-text">person_outline</i>
 				       <input id="icon_telephone" type="text" name="ape" class="validate" required>
 				       <label for="icon_telephone">Apellido</label>
 				    </div>
            <div class="input-field col s6">
 							 <i class="material-icons prefix grey-text">phone_android</i>
 							 <input id="email" type="number" name="tel" class="validate" required>
 							 <label for="email">Telefono</label>
 		  			</div>
            <div class="input-field col s6">
 							 <i class="material-icons prefix grey-text">phone_android</i>
 							 <input id="email" type="text" name="dir" class="validate" required>
 							 <label for="email">Direccion</label>
 		  			</div>
 						<div class="input-field col s6">
 							 <i class="material-icons prefix grey-text">email</i>
 							 <input id="email" type="email" name="ema" class="validate" required>
 							 <label for="email">Email</label>
 						</div>
            <div class="input-field col s6">
 							 <i class="material-icons prefix grey-text">phone_android</i>
 							 <input id="email" type="text" name="car" class="validate" required>
 							 <label for="email">Cargo</label>
 		  			</div>
            <div class="input-field col s6">
 							 <i class="material-icons prefix grey-text">phone_android</i>
 							 <input id="email" type="text" name="cen" class="validate" required>
 							 <label for="email">Centro</label>
 		  			</div>
 				</div>
<div class="card-action grey lighten-3">
  <button class="waves-effect waves-light btn teal  thin" name="g">Guardar</button>
    </form>


</div>
</div>
</div>

</div>

  <div class="container">
    <?php include 'consultar.propietario.php'; ?>
  </div>
