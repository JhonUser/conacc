<!-- Jhon T. Gómez -->
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
    var t = "../Controller/propietario.controller.php?e=e&cod="+ c;
    window.location.href=t;
  } else {
      swal("Cancelado", "No se eliminara el registro", "error");
  }
 });
}
</script>
  <table id="table" class="striped responsive-table">
  	<thead>
  		<tr>
  			<td>Titulo</td>
  			<td>Imagen</td>
  			<td>Descripcion</td>
  			<td>Fecha</td>
      </tr>
  	</thead>
  	<tbody>
      <?php require_once '../Model/conexion.php'; require '../Model/anuncios.class.php'; $dato = Anuncio::consultar_anuncio(); ?>
      <?php foreach ($dato as $views): ?>
        <tr>
          <td><?php echo $views["anu_tit"]?></td>
          <td><?php echo $views["anu_ima"]?></td>
          <td><?php echo $views["anu_des"]?></td>
          <td><?php echo $views["anu_fec"]?></td>
          <td>
            <a href="dashboard.php?seccion=m_anuncios&cod=<?php echo $views['anu_cod']; ?>" class="btn-floating light-green">
              <i class="material-icons">edit</i>
            </a>
            <a onclick='d("<?php echo $views['anu_cod']; ?>")' class='btn-floating red'>
                  <i class='material-icons'>delete_forever</i>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
  	</tbody>
  </table>
