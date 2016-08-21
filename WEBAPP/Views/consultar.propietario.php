<!-- Consulta de registros de propietarios -->
<?php
  require '../Model/conexion.php';
  require '../Model/propietario.class.php';
  $datos = registro::consultar_propietario();
?>
<div class="container">
  <table id="consultar.propietario">
  	<thead>
  		<tr>
  			<td>Codigo</td>
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
  		<?php
  			foreach ($datos as $propietario) {
  				echo "<tr>
    							<td>".$propietario["propie_docu"].  "</td>
    							<td>".$propietario["propie_nombre"]."</td>
    							<td>".$propietario["propie_apelli"]."</td>
    							<td>".$propietario["propie_tel"].   "</td>
    							<td>".$propietario["propie_dire"].  "</td>
    							<td>".$propietario["propie_email"]. "</td>
                  <td>".$propietario["propie_cargo"]. "</td>
                  <td>".$propietario["propie_centro"]."</td>
                  <td><a href='#". $propietario["propie_cod"] . "'>Modificar</a></td>
  				      </tr>";
              }
              ?>
  	</tbody>
  </table>
</div>
