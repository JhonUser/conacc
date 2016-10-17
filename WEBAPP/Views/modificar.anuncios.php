<!-- Jhon T. Gómez -->
<?php require_once("../Model/conexion.php"); require_once("../Model/anuncios.class.php"); ?><br>

<div class="container">
	<div class="row">
    <div >
      <div class="card">
        <div class="card-action teal darken-2">
        <a href="dashboard.php?seccion=r_anuncios' ?>" class="btn-floating z-depth-0 teal darken-2"><i class="material-icons">keyboard_backspace</i></a>
        <button type="button" class="btn teal darken-2 z-depth-0 white-text thin" style="margin-left:25%">Modificar Anuncio</button>
      </div>
      <div class="card-content">
        <form action="../Controller/anuncios.controller.php" method="post"<?php $codigo = Anuncio::datos_anuncio($_GET["cod"]); ?> enctype="multipart/form-data">
              <input type="hidden" name="cod" value="<?php echo $codigo["anu_cod"]; ?>" required>
              <label for="ced">Titulo del Anuncio</label>
              <input type="text" name="tit"  id="ced" value="<?php echo $codigo["anu_tit"]; ?>" required>
              <label for="nom">Imagen*</label>
              <input type="file" name="ima"  id="nom" value="<?php echo $codigo["anu_ima"]; ?>" required>
              <label for="ape">Descripcion</label>
              <input type="text" name="des"  id="ape" value="<?php echo $codigo["anu_des"]; ?>" required>
          </div>
  	        <div class="card-action grey lighten-3">
  	          <button class="btn teal thin" name="m"><i class="material-icons right">send</i>Modificar Anuncio</button>
  	        </div>
  				</form>
	      </div>
	    </div>
   </div>
