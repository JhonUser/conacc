	<!-- Formulario: Guardar rol -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	$( document ).ready(function(){
		function algo(){
			var tr=$("#trato").val();
			if ("no" in tr){
				alert("No puede, carajo");
			}
			else{
				alert("hagale");
			}
		}
		$("#codrol").keyup(function(){
			var codigo =$("#codrol").val();
			var vali= "concod";
			$.post("../Controller/guardarrol.php", {cod: codigo, action:vali}).done(function(data){
			$("#trato").html(data);	
			//alert( codigo );
			});
        	
		});
        

    });
</script>
<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-action red darken-4">
				<button type="button" class="btn red darken-4 z-depth-0 white-text thin" style="margin-left:25%">Registro de Rol</button>
			</div>
				 <div class="card-content">
					<form action="../Controller/guardarrol.php" method="post" onsubmit="algo()">
						<center><h4 class="thin">Registro de Rol</h4></center>
							<div class="row">
							  	<div class="input-field col s10">
									<i class="material-icons prefix grey-text">control_point_duplicate</i>
								  <input type="number" name="txt_codrol" id="codrol" placeholder="Codigo de rol" class="validate  brown-text" required>
								</div>
							</div>
							<span  id="trato" style="color: green"></span>

							<div class="row">
							  	<div class="input-field col s10">
									<i class="material-icons prefix grey-text">control_point</i>
								  <input type="text" name="txt_nomrol" id="nom" class="validate" required>
									<label for="nom">Nombre</label>
								</div>
							</div>

							<div class="row">
							  	<div class="input-field col s10">
									<i class="material-icons prefix grey-text">description</i>
								  <input type="text" name="txt_descrol" id="des" class="validate" required>
									<label for="des">Descripcion</label>
								</div>
							</div>
			<div class="card-action grey lighten-3">
				<button type="submit" value="Guardar" class="btn thin teal" name="action">Guardar</button>
					</form>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<?php include 'consulta.rol.php'; ?>
</div>
