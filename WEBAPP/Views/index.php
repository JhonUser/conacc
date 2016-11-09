<!DOCTYPE html>
  <html>
    <head>
      <title>Login</title>
      <meta name="author" content="@jhon, @jeison">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="keywords" content="Control de acceso, conacc, seguridad">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
      <script src="script/sweetalert.min.js"></script>
      <script src="script/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="script/sweetalert.css">
      <script type="text/javascript" src="script/script.js"></script>
      <link rel="stylesheet" type="text/css" href="script/sweetalert.css">
    </head>

    <body style="background-color: grey;">
      <?php
  		$err= isset($_GET['att']);
  				if($err=="error"){
  					echo "<script type='text/javascript'>";
  					echo "log();";
  					echo "</script>";
  				}
            ?>
        <div class="container" style="width: 35%;">
          <div class="card" >
            <div class="card-action teal darken-2">
              <button type="button" class="btn blue-grey darken-4 z-depth-2 white-text thin" style="margin-left:27%">Ingresar a Conacc</button>
            </div>
            <div class="card-content  blue-grey darken-4">
              <form action="../Controller/log.controller.php" method="post">
                <div class="input-field col s12">
                  <i class="material-icons prefix">perm_identity</i>
                  <input type="text" name="nombre" class="white" placeholder="Usuario" required="">
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">vpn_key</i>
                <input type="password" name="contrasena" class="white" placeholder="Contraseña" required="">
                </div>
             </div>
             <div class="card-action blue-grey darken-4 center">
                <button type="submit" class="btn thin  teal darken-3" name="sesion">Ingresar</button>
              </form>
             </div>
           </div>
         </div>
       </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    </body>
  </html>
