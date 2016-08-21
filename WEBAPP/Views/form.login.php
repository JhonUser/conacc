<section id="log">
  <nav>
    <div class="nav-wrapper grey darken-3">
      <ul>

        <li><a href="#">Ayuda</a></li>
     </ul>
    </div>
  </nav>
<div class="espacio_form">

 <form action="../Controller/login.controller.php" method="post">

    <br>
    <label for="nom" id="icono" ><i class="icon-user"></i></label>
      <input type="text" name="nombre" id="nom" placeholder="Usuario" required/>
    <label for="contra" id="icono"><i class="icon-shield"></i></label>
      <input type="password" name="contrasena" id="contra" placeholder="Contraseña" required/>
    <br><br><input type="checkbox" id="admin" />
      <label for="admin">Iniciar como Administrador</label>
    <hr>
    <p>Si no tiene cuenta, <a href="#">haga clic aquí </a>para realizar un registro.</p>
    <br>
    <button class="btn waves-effect waves-center indigo" type="submit" name="sesion">Iniciar Sesion</button>
    <button class="btn waves-effect waves-light grey darken-1" type="reset" name="limpiar">Limpiar</button>

 </form>
</div>

</section>
