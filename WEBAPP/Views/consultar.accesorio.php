  <table id="tabla" class="striped responsive-table">
  	<thead>
  		<tr>
  			<td>Componente</td>
  			<td>Registro</td>
  			<td>Color</td>
  			<td>Cantidad</td>
        <td>Accion</td>
      </tr>
  	</thead>
  	<tbody>
      <?php  $consul = $datos->Consultar_Accesorio(); ?>
      <?php foreach ($consul as $views): ?>
        <tr>
          <td><?php echo $views["compo_cod"]?></td>
          <td><?php echo $views["regi_cod"]?></td>
          <td><?php echo $views["acce_col"]?></td>
          <td><?php echo $views["acce_can"]?></td>
          <td>
            <a href="dashboard.php?seccion=m_accesorio&cod=<?php echo $views['acce_cod'] ?>" class="btn-floating light-green">
              <i class="material-icons">edit</i>
            </a>
            <a href="../Controller/accesorio.controller.php?e=e&cod=<?php echo $views['acce_cod'] ?>" class="btn-floating red">
              <i class="material-icons">delete_forever</i>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
  	</tbody>
  </table>
