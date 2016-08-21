
<!-- Formulario Registro de propietarios de productos -->
<div class="container">
  <h3>Registro de Propietarios</h3>

    <form action="../Controller/propietario.controller.php" method="post">
      <label for="cod">Codigo del propietario</label>
        <input type="text" name="cod" id="cod" required>
      <label for="ced">CC / T.I</label>
        <input type="text" name="ced" id="ced" required>
      <label for="nom">Nombre</label>
        <input type="text" name="nom" id="nom" required>
      <label for="ape">Apellido</label>
        <input type="text" name="ape" id="ape" required>
      <label for="tel">Telefono</label>
        <input type="number" name="tel" id="tel"required>
      <label for="dir">Direccion</label>
        <input type="text" name="dir" id="dir" required>
      <label for="ema">Email</label>
        <input type="email" name="ema" id="ema" required>
      <label for="cen">Centro</label>
        <input type="text" name="cen" id="cen" required>
      <label for="car">Cargo</label>
        <input type="text" name="car" id="car" required>
      <button class="right btn green" name="accion" value="registro">Enviar</button> <!--Registro-->
    </form>
    <a href="inicio.php?seccion=c.propietario">ir a consulta</a>

</div>
