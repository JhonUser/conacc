<!-- Jhon T. Gómez -->
<div class="container">
  <table id="consultar.propietario">
  	<thead>
  		<tr>
  			<td>Cedula</td>
  			<td>Nombre</td>
  			<td>Apellido</td>
  			<td>Telefono</td>
  			<td>Direccon</td>
  			<td>Email</td>
        <td>Cargo</td>
        <td>Centro</td>
      </tr>
  	</thead>
  	<tbody>
      <?php require '../Model/conexion.php'; require '../Model/propietario.class.php'; $dato = registro::consultar_propietario(); ?>
      <?php foreach ($dato as $views): ?>
        <tr>
          <td><?php echo $views["prop_doc"]?></td>
          <td><?php echo $views["prop_nom"]?></td>
          <td><?php echo $views["prop_ape"]?></td>
          <td><?php echo $views["prop_tel"]?></td>
          <td><?php echo $views["prop_dir"]?></td>
          <td><?php echo $views["prop_ema"]?></td>
          <td><?php echo $views["prop_car"]?></td>
          <td><?php echo $views["prop_cen"]?></td>
          <td>
            <a href="modificar.propietario.php?cod=<?php echo base64_encode($views['prop_cod']); ?>">
              <img src="images/modificar.png" height="20"width="20"/>
            </a>
            <a href="../Controller/propietario.controller.php?e=e&cod=<?php echo base64_encode($views['prop_cod']); ?>">
              <img src="images/eliminar.png" height="20" width="20"/>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
  	</tbody>
  </table>
</div>
