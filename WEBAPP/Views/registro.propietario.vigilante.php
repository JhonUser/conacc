<!-- Jhon T. Gómez -->
<script type="text/javascript">
      function sugerencia(str){
        var xmlhttp;
        if (str.length==0) {
          document.getElementById("txtHint").innerHTML="";
          return;
        }
        if (window.XMLHttpRequest) {
          xmlhttp =new XMLHttpRequest();
        }else {
          xmlhttp =new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function(){
          if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById('txtHint').innerHTML=xmlhttp.responseText;
          }
        }
        xmlhttp.open("GET", "../Controller/buscar.controller.php?num=" + str, true);
        xmlhttp.send();
      }
    </script>
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
       							 <input id="email" type="number" name="ced" onkeyup="sugerencia(this.value)" class="validate" required>
       							 <label for="email">Cedula</label>
                     <div style="position:absolute; font-size: 13px; margin-left: 11%; margin-top: -3%;" id="txtHint"></div>
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
       							 <i class="material-icons prefix grey-text">place</i>
       							 <input id="email" type="text" name="dir" class="validate" required>
       							 <label for="email">Direccion</label>
       		  			</div>
       						<div class="input-field col s6">
       							 <i class="material-icons prefix grey-text">email</i>
       							 <input id="email" type="email" name="ema" class="validate" required>
       							 <label for="email">Email</label>
       						</div>
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
      <div class="card-action grey lighten-3">
        <button class="waves-effect waves-light btn teal  thin" name="g">Guardar</button>

        <a class="activator waves-effect waves-light btn grey darken-2  thin" href="#">Consultar propietarios</a>
        <a href="dashboard.php?seccion=rr_producto"class="btn orange right thin">Registrar Producto</a>
          </form>


      </div>
      </div>

    </div>
    <div class="card-reveal blue-grey">
      <span class="card-title grey-text text-darken-4 thin">Consulta de propietarios<i class="material-icons right">close</i></span>
      <?php include 'consultar.propietario.vigilante.php'; ?>
    </div>
  </div>
</div>
