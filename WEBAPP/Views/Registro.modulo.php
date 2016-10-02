	<!-- Formulario: Guardar modulo -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	$( document ).ready(function(){
		$("#modu_cod").keyup(function(){
			var codigo =$("#moducod").val();
			var vali= "concod";
			$.post("../Controller/modulo.controller.php", {cod: codigo, accion:vali}).done(function(data){
			$("#depues").html(data);	
			//alert( codigo );
			});
        	
		});
        

    });
</script>

<div class="container">
	<center class="">Registro de modulos</center>
		<form class="col s12" action="../Controller/modulo.controller.php" method="POST">
			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">vpn_key</i>
				<input id="icon_prefix" type="number" name="txt_moducod" id="moducod" class="validate" required>
				<label for="icon_prefix">Codigo del modulo</label>
			</div>
			<span id="depues" style="color: green"></span>

			<div class="input-field col s6">
				<i class="material-icons prefix grey-text">view_module</i>
				<input id="icon_prefix" type="text" name="txt_modunom" class="validate" required>
				<label for="icon_prefix">Nombre del modulo</label>
			</div>

			<div class="col s7">
				<button  class="waves-effect waves-light btn teal right thin" name="accion" value="Guardar">Guardar</button>
			</div>
		</form>
</div>
<div class="container">
	<?php include 'consulta.modulo.php'; ?>
</div>