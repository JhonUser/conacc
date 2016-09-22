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
     <script src="script/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
     <?php include '../Model/seccion.class.php'; dashboard::session(); ?>
     <link rel="stylesheet" type="text/css" href="styles/estilos.css">
     <script type="text/javascript">
	function c(){
		swal("!Bien!", "Guardó con exito!", "success");
	}
	function u(){
		swal("!Bien!", "Modificó con exito!", "success");
	}
	function d(){
swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
  	window.location.href="../Controller/guardarrol.php?rol_cod=$consulta['rol_cod']&action=Borrar";
   

  } else {
	    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
	}

	</script>
	</head>
	<body>

		<?php
			include 'section.inicio.php';
			dashboard::pagina();
			$try = isset($_GET['c']);
				if ($try=="c")
				{
					echo "<script type='text/javascript'>";
					echo "c()";
					echo "</script>";
				}
			$try = isset($_GET['u']);
				if ($try=="u")
				{
					echo "<script type='text/javascript'>";
					echo "u()";
					echo "</script>";
				}
			 // $try = isset($_GET['d']);
			 // 	if ($try=="d")
			 // 	{
				// 	echo "<script type='text/javascript'>";
				// 	echo "d()";
				// 	echo "</script>";

				// }

		 ?>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
     <script type="text/javascript" src="script/script.js"></script>
	 </body>
 </html>
