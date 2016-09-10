<!-- Jhon T. Gómez | secciones de la aplicacion-->
<?php
  class dashboard{

    public static function session(){
       session_start();
       	if (!isset($_SESSION["nombre"])) {
       		header("location: ../index.php");
      	}
     }

    public static function pagina(){
      if (isset($_GET["seccion"])) {
  			$ventana = $_GET["seccion"];

          switch ($ventana) {
            case base64_encode('inicio'):
              include("inicio.php");
              break;
            case 'producto':
              include("registro.producto.php");
              break;
            case 'usuario':
              include("Registro.usuario.php");
              break;
            case base64_encode('r.propietario'):
              include 'registro.propietario.php';
              break;
            case 'rol':
              include 'registro.rol.php';
              break;
            case 'c.propietario':
              include 'consultar.propietario.php';
              break;
            case 'm.propietario':
              include 'modificar.propietario.php';
              break;
            case 'r_marca':
              include 'registro.marca.php';
              break;
            case 'r_modulo':
              include 'registro.modulo.php';
              break;
            case 'r_t_producto':
              include 'registro.tipoproducto.php';
              break;
            case 'r_modulo':
              include 'registro.modulo.php';
              break;
            case 'c_t_producto':
              include 'consulta.tipoproducto.php';
              break;
            case 'tipopro_cod':
              include 'modifico_tipoproducto.php';
              break;
            case 'tipopro_cod':
              include 'modifico_tipoproducto.php';
              break;
            case 'r_permiso':
              include("Registro.permiso.php");
              break;

            default:

          break;
        }
  		}else {
  			$ventana = "";
  		}
    }
  }
  
?>