<!-- Jhon T. Gómez -->
<div class="container">
<div class="row">
  <div class="card">
    <div class="card-action teal darken-4">
      <button type="button" class="btn teal darken-4 z-depth-0 white-text thin" style="margin-left:35%">Guardar Anuncio</button>
    </div>
    <div class="card-content">
       		<div class="row">
            <form class="col s12" action="../Controller/anuncios.controller.php" method="post" enctype="multipart/form-data">
       				  <div class="row">
                  <div class="input-field col s6">
       					 		 <i class="material-icons prefix">title</i>
       							 <input type="text" name="tit" class="validate" required>
                     <label>Titulo del anuncio</label>
       	  				</div>

                    <div class="file-field input-field col s6">
                      <div class="btn blue-grey">
                        <span><i class="material-icons">add_a_photo</i></span>
                        <input type="file" name="ima" multiple>
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" name="ima" type="text" placeholder="Seleccinar una imagen">
                    </div>
                  </div>
       				    <div class="input-field col s12">
       				       <i class="material-icons prefix">textsms</i>
                     <textarea id="textarea1" name="des" class="materialize-textarea" length="200"></textarea>
                     <label for="textarea1">Información</label>
       				    </div>
       				</div>
          <div class="card-action grey lighten-3">
            <button class="waves-effect waves-light btn teal darken-4  thin" name="g">Guardar Anuncio</button>
            <a class="activator waves-effect waves-light btn blue-grey darken-2  thin" href="#">Consultar Anuncio</a>
          </form>
        </div>
      </div>
    </div>
    <div class="card-reveal blue-grey">
      <span class="card-title grey-text text-darken-4 thin">Consulta de Anuncios<i class="material-icons right">close</i></span>
      <?php include 'consultar.anuncios.php'; ?>
    </div>
  </div>
</div>
