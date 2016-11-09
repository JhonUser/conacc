<?php require_once '../Model/conexion.php'; require_once '../Model/anuncios.class.php'; $anuncios = Anuncio::consultar_anuncio(); ?>

      <?php foreach ($anuncios as $anun): ?>

<div class="row">

            <div class="col s12 m7" style="margin-left: 12%; width: 70%;">
              <div class="card" >
                <div class="card-image">
                  <img src="<?php echo "images/".$anun["anu_ima"] ?>" alt="" height="300"/>

                </div>
                <div class="card-content">
                  <span class="card-title"><?php echo $anun["anu_tit"]; ?></span>
                  <p><?php echo $anun["anu_des"] ?></p>
                </div>
                <div class="card-action">
                  <a href="#"><?php echo $anun["anu_fec"] . " - " . $anun["anu_hor"]; ?></a>
                </div>
              </div>
            </div>
</div>

      <?php endforeach; ?>
