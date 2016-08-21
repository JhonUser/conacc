<?php
		include '../Controller/validar.inicio.class.php';
		inicio::session();
?>
<!DOCTYPE html>
 <html>
	 <head>
		 <title>Inicio</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		 <link rel="stylesheet" type="text/css" href="styles/estilos.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		 <meta name="author" content="@andrea, @jhon, @jeison">
	 </head>

		<?php
			include 'section.inicio.php';
			inicio::pagina();
			// include 'consultar.propietario.php';
			// include 'registro.propietario.php';
			

		 ?>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
     <script type="text/javascript" src="script/script.js"></script>
	 </body>
 </html>
