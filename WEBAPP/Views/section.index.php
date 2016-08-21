<section>
<!--Inicio de Nav-->
  <div class="navbar-fixed" id="nav-index">
    <nav>
      <div class="nav-wrapper black" >
        <a href="#!" class="brand-logo center"><img src="imagenes/logo_png.png" width="125" height="67" /></a>
        <a  href="#!" data-activates="mobile" class="button-collapse">
          <i class="right mdi-navigation-menu material-icons">arrow_forward</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#hola">Contactenos</a></li>
          <li><a href="#ubicanos">Ubicanos</a></li>
          <li><a href="registro.usuario.php">Crear</a></li>
          <li><a href="registro.rol.php"></a></li>
          <a class="waves-effect waves-light btn modal-trigger" href="#iniciar_sesion">Iniciar Sesion</a>

        </ul>
        <ul id="mobile" class="side-nav">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#hola">Contactenos</a></li>
          <li><a href="#ubicanos">Ubicanos</a></li>
          <a class="waves-effect waves-light btn modal-trigger" href="#iniciar_sesion">Iniciar Sesion</a>
        </ul>
      </div>
    </nav>
  </div>
<!--Fin de nav-->

<!-- Inicio de formulario login dentro de Modals-->
  <div id="iniciar_sesion" class="modal">
    <div class="nav purple darken-2">
      <h5 class="center white-text">Ingresar al sistema</h5>
    </div>
    <div class="modal-content">

      <form action="../Controller/validar.log.php" method="post">
        <table>
          <tr>
            <i class="material-icons prefix ">account_circle</i>
            <input id="usu" type="text" placeholder="Usuario" name="nombre" class="validate" required>
          </tr>
          <tr>
            <i class="material-icons" >vpn_key</i>
            <input id="contra" type="password" placeholder="Contraseña" name="contrasena" class="validate" required>
          </tr>
        </table><br>
        <button type="submit" name="sesion_vigilante" class="btn waves-effect purple darken-2" >Iniciar Sesión</button>
      </form>

        <a href="#!" class="modal-action modal-close waves-effect waves-grey btn-flat right">Cancelar<i class="material-icons right">send</i></a>
    </div>
  </div>
<!--Fin de formulario login-->

<!-- Inicio de Slider -->
  <div class="slider fullscreen" id="inicio">
      <ul class="slides">
        <li>
          <img src="images/bolso.jpg">
          <div class="caption center-align">
            <h3 class="light grey-text text-lighten-3">Security Software</h3>
            <p>
              Texto
            </p>
          </div>
        </li>
        <li>
          <img src="images/computer.jpg">
          <div class="caption left-align">
            <h3 class="light grey-text text-lighten-3">Security Software</h3>
            <h5 class="light grey-text text-lighten-3">Hola</h5>
          </div>
        </li>
        <li>
          <img src="imagenes/monte.jpg">
          <div class="caption right-align">
            <h3 class="light grey-text text-lighten-3">Security Software</h3>
            <h5 class="light grey-text text-lighten-3">Proceso</h5>
          </div>
        </li>
      </ul>
    </div>
<!-- Fin de Slider-->
</section>
<!-- ....................................................................................................................... -->
<section>
<!-- Inicio de información de pagina, Num1 -->
    <div class="section" id="hola" >
      <div class="row">
      <br>

      <div class="col s12 m4">
        <div class="icon-block center">
          <div class="container">
            <div class="row">
              <img src="imagenes/j1.jpg" width="90" height="130" class="col s6" />
              <h5 class="col s6">Hola</h5>
              <p>Mensage para ver en la pagina de nueva para el celular</p>
            </div>
          <div class="row">

          </div>
        </div>
      </div>
    </div>
<!-- Fin de informacion de contacto, Num1 -->

<!-- Inicio de formulario de contacto -->
    <div class="col s12 m4" id="contactenos" >
      <form action="" method="post">
        <h5 class="center black-text">Contactenos</h5><br>
          <div class="row">
            <div class="input-field col s10 m6">
              <i class="material-icons prefix yellow-text">account_circle</i>
              <input id="nombre" type="text" class="validate" required>
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s10 m6">
              <i class="material-icons prefix  blue-text">account_box</i>
              <input id="apellido" type="text" class="validate" required>
              <label for="apellido">Apellido</label>
            </div>
            <div class="input-field col s10 m6">
              <i class="material-icons prefix red-text">mail_outline</i>
              <input id="correo" type="email" class="validate" required>
              <label for="correo" >Email</label>
            </div>
            <div class="input-field col s10 m6">
              <i class="material-icons prefix grey-text">location_city</i>
              <input id="ciudad" type="text" class="validate" required>
              <label for="ciudad">Ciudad</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix brown-text">mode_edit</i>
              <textarea id="comentario" class="materialize-textarea" length="300" required></textarea>
              <label for="comentario">Comentario, Sugerencia o Solicitud</label>
            </div>
            <div class="button-collapse center col s12">
              <br>
              <button class="btn waves-effect center red" type="submit">Enviar<i class="material-icons right">send</i></button>
            </div>
          </div>
        </form>
      </div>
<!-- Fin de formulario de contacto -->

<!-- Inicio de informacion, Num2 -->
      <div class="col s12 m4">
        <div class="icon-block">
          <div class="container">
            <div class="row">
              <img src="imagenes/j1.jpg" width="90" height="130" class="col s6" />
              <h5 class="col s6">Hola</h5>
              <p>
                Hola este es mi mensage para ver en la pagina de nueva para el celular
              </p>
            </div>
            <div class="row">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de informacion, num2 -->
</section>
<!-- .................................................................................................................... -->
<section>
<!-- Inicio del pie de pagina -->
        <footer class="page-footer blue-grey darken-3">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <h5 class="white-text center">Nuestros Puntos!</h5>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126910.79619578429!2d-75.596392!3d6.2686779999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1467860289143"
                  height="464"  frameborder="0" style="border:0" class="col s12 m12" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <div class="footer-copyright grey darken-4">
              <div class="container">
              © 2016 Copyright | Security Software - Medellín Colombia
              </div>
            </div>
        </footer>
<!-- Fin de pie de pagina -->
</section>
