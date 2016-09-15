<!-- Jhon T. Gómez -->
<!DOCTYPE html>
 <html>
	 <head>
		 <title>Dashboard</title>
		 <meta name="author" content="@jhon, @andrea, @jeison">
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		 <meta name="keywords" content="Control de acceso, conacc, seguridad">
		 <link rel="shortcut icon" href="images/user.png">
		 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
     <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
     <script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.0/sweetalert.min.js"></script>
     <script src="hhttps://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.0/sweetalert.min.css"></script>
     <?php include '../Model/seccion.class.php'; dashboard::session(); ?>
     <link rel="stylesheet" type="text/css" href="styles/estilos.css">
	</head>
	<body>

		<?php
			include 'section.inicio.php';
			dashboard::pagina();
			$try = isset($_GET['c']);
				if ($try=="c")
				{
					echo "<script>alert('Guardó con exito')</script>";
				}
			$try = isset($_GET['u']);
				if ($try=="u")
				{
					echo "<script>alert('Modificó con exito')</script>";
				}
			 $try = isset($_GET['d']);
			 	if ($try=="d")
			 	{
					echo "<script>confirm('¿Desea eliminar?')</script>";
<<<<<<< HEAD
<<<<<<< HEAD
				}

=======
=======
>>>>>>> bc2ececf64e412e51bca382338c595c94e8e386e
			 	}
			
>>>>>>> origin/master
		 ?>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
     <script type="text/javascript" src="script/script.js"></script>
	 </body>
 </html>
