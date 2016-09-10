<div class="row">

  <form class="col s5" action="../Controller/log.controller.php" method="post">
    <h5>Ingresar</h5>
    <div class="row">
      <div class="input-field col s7">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" name="nombre" class="validate">
        <label for="icon_prefix">Usuario</label>
      </div>
      <div class="input-field col s7">
        <i class="material-icons prefix black-text">vpn_key</i>
        <input id="icon_telephone" type="password" name="contrasena" class="validate">
        <label for="icon_telephone">Contraseña</label>
      </div>
    </div>
    <div class="input-field col s7">
      <button type="submit" name="sesion" class="btn thin purple right">Ingresar</button>
    </div>
  </form>
</div>
