<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';
  $tipo_produ = Gestion_Tipoproducto::ConsultarTodo();
?>
<script type="text/javascript">
  
function d(c){
swal({
  title: "¿Desea eliminar?",
  text: "",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Si",
  cancelButtonText: "No",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Muy bien", "Se ha eliminadó", "success");
    var t = "../Controller/tipoproducto.controller.php?tipopro_cod="+ c + "&accion=delete";
    window.location.href=t;
   

  } else {
      swal("Cancelado", "No se eliminara el registro", "error");
  }
});
  }
  </script>
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
                    <a class='btn-floating green' href='dashboard.php?seccion=m_tipoproducto&tipopro_cod=".$row["tipopro_cod"]."'><i class='material-icons'>edit</i></a> 
                    <a onclick='d(".$row["tipopro_cod"].")' class='btn-floating red'>
                    <i class='material-icons'>delete_forever</i>
                    </a>
                    </td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>
