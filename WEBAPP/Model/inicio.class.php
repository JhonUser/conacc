<?php
  class inicio{

     function session(){
       session_start();
     	if (!isset($_SESSION["nombre"])) {
     		header("location: index.php");
    	}
     }

    function pagina(){
      if (isset($_GET["seccion"])) {
  			$pagin = $_GET["seccion"];
  		}else {
  			$pagin = "";
  		}

      switch ($pagin) {
        case 'producto':
          include("registro.producto.php");
        break;
        case 'usuario':
          include("Registro.usuario.php");
        break;
        case 'propietario':
          include 'registro.propietario.php';
          break;
        case 'rol':
          include 'registro.rol.php';
          break;
        case 'c.propietario':
          include 'consultar.propietario.php';
          break;
          case 'marca':
            include 'registro.marca.php';
            break;
            case 't_producto':
              include 'registro.tipoproducto.php';
              break;
        case 'cerrarsession':
          include("../Controller/cerrarsession.php");
        break;
        default:
      break;
    }
  }
}
?>
