<!-- Jhon T. Gómez -->
<!DOCTYPE html>
 <html>
	 <head>
		 <title>Dashboard</title>
		 <meta name="author" content="@jhon,@jeison">
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		 <meta name="keywords" content="Control de acceso, conacc, seguridad">
		 <link rel="shortcut icon" href="images/user.png">
		 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
     <script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
     <script src="script/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
     <?php include '../Model/seccion.class.php'; dashboard::session(); ?>
     <link rel="stylesheet" type="text/css" href="styles/estilos.css">
     <script type="text/javascript" src="script/script.js"></script>
	</head>
	<body>

		<?php
			include 'section.inicio.php';
			dashboard::pagina();
			$err= isset($_GET['e']);
				if($err=="23000"){
					echo "<script type='text/javascript'>";
					echo "e();";
					echo "setTimeout('redir()',2000);";
					echo "</script>";	
				}

			$try = isset($_GET['crt']);
				if ($try=="c")
				{
					echo "<script type='text/javascript'>";
					echo "c();";
					echo "setTimeout('redir()',2000)";
					echo "</script>";	
				
				}
			$try = isset($_GET['upt']);
				if ($try=="u")
				{
					echo "<script type='text/javascript'>";
					echo "u();";
					echo "setTimeout('redir()',2000)";
					echo "</script>";
					
				}
			$try = isset($_GET['act']);
				if ($try=="ac")
				{
					echo "<script type='text/javascript'>";
					echo "a();";
					echo "setTimeout('redir()',2000)";
					echo "</script>";
					
				}	
			
		 ?>


	     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	     <script type="text/javascript" src="script/script.js"></script>
	 </body>
 </html>
