<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
$tipo_produ = Gestion_Tipoproducto::ConsultarTodo();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable( {
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
            }
        } );
    } );
  </script>

  <title></title>
</head>
<body>
  <h1>Gestion de tipo de producto</h1>
  <a href="registro.tipoproducto.php">Volver</a>
  <!--Aqui va a ir la tabla-->

    <table id="datatable">
      <thead>
        <tr>
          <td>Item</td>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Descripcion</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $item = 1;
          foreach ($tipo_produ as $row) {
            echo"<tr>
                    <td>".$item."</td>
                    <td>".$row["tipopro_cod"]."</td>
                    <td>".$row["tipopro_nombre"]."</td>
                    <td>".$row["tipopro_desc"]."</td>
                    <td>
                    <a href='modifico_tipoproducto.php?tipopro_cod=".$row["tipopro_cod"]."'>Modificar</a> -
                    <a href='../Controller/tipoproducto.controller.php?tipopro_cod=".$row["tipopro_cod"]."&accion=delete' >Eliminar</a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>

</body>
</html>
