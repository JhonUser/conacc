<!-- Jhon T. Gómez | secciones de la aplicacion-->
<?php
  class dashboard{

    function session(){
       session_start();
       	if (!isset($_SESSION["nombre"]) or ($_SESSION["rol"] != 1)) {
       		header("location: ../Views/index.php");
      	}
     }

    function pagina(){
      if (isset($_GET["seccion"])) {
  			$ventana = $_GET["seccion"];

          switch ($ventana) {
            case 'producto':
              include("registro.producto.php");
              break;
            case 'ced':
              include("consul_ced.php");
            break;
            case 'm_r_producto':
              include("modificar.registro_producto.php");
              break;
            case 'usuario':
              include("Registro.usuario.php");
              break;
            case 'm_usuario':
              include("modifico_usuario.php");
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
            case 'c_cedu':
              include 'consulta.individual.php';
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
            case 'm_tipoproducto':
              include 'modifico_tipoproducto.php';
              break;
            case 'r_permiso':
              include("Registro.permiso.php");
              break;
            case 'm_rol':
              include("modifico_rol.php");
              break;
            case 'm_marca':
              include("modificar.marca.php");
              break;
             case 'm_modulo':
              include("modifico_modulo.php");
              break;
             case 'm_permi':
              include("modifico_permiso.php");
              break;
            case 'm_producto':
              include("modificar.producto.php");
              break;
            case 'm_compo':
              include("modificar.componente.php");
              break;
            case 'rr_producto':
              include("registro.registro_producto.php");
              break;
            case 'r_accesorio':
              include("registrar.accesorio.php");
              break;
            case 'c_entrada':
              include("consulta.entrada_salida.php");
              break;
            case 'r_componente':
              include("registro.componente.php");
              break;
            case 'anuncios':
              include 'registrar.anuncios.php';
              break;
            case 'm_anuncios':
              include 'modificar.anuncio.php';
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
