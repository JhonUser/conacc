	<!-- Formulario: Guardar Marca de producto -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	$( document ).ready(function(){
		$("#codmarca").keyup(function(){
			var codigo =$("#codmarca").val();
			$.post("prueba.php", {cod: codigo}).done(function(data){
			$("#trato").html(data);	
			//alert( codigo );
			});
        	
		});
        

    });
</script>
 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
<script type="text/javascript">
function a(){
	swal({
  title: "HTML <small>Title</small>!",
  text: "A custom <input type='text' value='2' name='img_logomarca'> message.",
  html: true
});
	}
</script>
<div class="container">


	<form action="../Controller/marca.controller.php" method="POST">
		<h2>Guardar Marca</h2>
		<label>Codigo de marca</label>
			<input type="text" name="txt_codmarca" id="codmarca"/>
		<label id="trato"></label><br>
		<label>Nombre de marca</label>
			<input type="text" name="txt_nommarca"/>
		<label>Logo de marca</label>
			<input type="text" name="img_logomarca">
		<button name="accion" value="create" class="btn">Guardar</button>
		
		<?php echo @$_REQUEST["$mensaje"]; ?>
	</form>
</div>
<button onclick="a()">Prueba</button>