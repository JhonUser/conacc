	<!-- Formulario: Guardar Marca de producto -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	$( document ).ready(function(){
		$("#txt_nommarca").keyup(function(){
			var codigo =$("#txt_nommarc").val();
			$.post("../Controller/marca.controller.php", {cod: codigo}).done(function(data){
			$("#trato").html(data);
			alert( codigo );
			});

		});


    });
</script>

<div class="container">
	<div class="card">
		<div class="card-action  blue-grey darken-4">
      <button type="button" class="btn blue-grey darken-4 lighten-1 z-depth-0 white-text thin" style="margin-left:35%">Registro de Marca</button>
    </div>
    <div class="card-content">
			<form class="col s12" action="../Controller/marca.controller.php" method="POST" enctype="multipart/form-data">
				<div class="input-field col s12">
					<i class="material-icons prefix grey-text">laptop</i>
					<input id="icon_prefix" type="text" name="txt_nommarca" id="txt_nommarca" class="validate" required>
					<label for="icon_prefix">Nombre de marca</label>
				</div>
				<div class="file-field input-field col s4">
						<div class="btn blue-grey darken-4">
							<span>Logo</span>
							<input type="file" name="img_logomarca"  required>
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
				</div>
				<div class="card-action grey lighten-3">
					<?php echo @$_REQUEST["$mensaje"]; ?>
					<button class="waves-effect waves-light btn blue-grey thin" name="accion" value="create" >Guardar</button>
					<a class="activator waves-effect waves-light btn amber" href="#">Consultar propietarios</a>
					</form>
				</div>
    	</div>

	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Consulta de Marcas<i class="material-icons right">close</i></span>
	      <?php include 'consulta.marca.php'; ?>
	    </div>
  </div>
</div>
