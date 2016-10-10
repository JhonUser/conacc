<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';
  $tipo_produ = Gestion_Tipoproducto::ConsultarTodo();
?>
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
                    <a class='btn-floating green' href='modifico_tipoproducto.php?tipopro_cod=".$row["tipopro_cod"]."'><i class='material-icons'>edit</i></a> 
                    <a class='btn-floating red' href='../Controller/tipoproducto.controller.php?tipopro_cod=".$row["tipopro_cod"]."&accion=delete' ><i class='material-icons'>delete_forever</i></a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>
