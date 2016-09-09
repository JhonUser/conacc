<!-- Jhon T. Gómez -->

  <nav class="z-depth-0 grey darken-3">
      <a  href="#!" data-activates="mobile-demo" class="button-collapse"><i class="right"><img src="images/icons/icon.png"/></i></a>
      <div class="top-nav nav-wrapper" >
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

        <ul class="side-nav fixed grey lighten-3" id="mobile-demo">
          <ul class="collapsible" data-collapsible="accordion" >
            <li>
              <a href="#" class="collapsible-header grey darken-3 white-text thin"><?php echo "Bienvenido, " . $_SESSION["nombre"]; ?><i class="material-icons right lime white-text">keyboard_arrow_down</i></a>
              <div class="collapsible-body white" >
                 <a href="../Controller/cerrarsession.php" class="indigo white-text thin 500" id="cerrar"><i class="material-icons right white-text">trending_down</i>Cerrar sesion</a>
              </div>
            </li>
            <li>
              <a href="dashboard.php?seccion=<?php echo base64_encode('inicio') ?>" class="waves-effect active" class="collapsible-header"><i class="material-icons left green-text">home</i>Inicio</a>
              <div class="collapsible-body indigo-text text-lighten-5" style="background-color: #673AB7"><p>...</p></div>
            </li>

            <li>
              <a href="dashboard.php?seccion=rol" class="collapsible-header"><i class="material-icons left red-text">control_point</i>Rol</a>
              <div class="collapsible-body white-text" style="background-color: #FF5722"><p>...</p></div>
            </li>
            <li>
              <a href="dashboard.php?seccion=usuario" class="collapsible-header"><i class="material-icons left yellow-text">person_add</i>Usuarios</a>
            </li>
            <li>
              <a href="dashboard.php?seccion=<?php echo base64_encode('r.propietario')?>" class="collapsible-header"><i class="material-icons left teal-text">person_pin</i>Propietarios</a>
              <div class="collapsible-body white-text" style="background-color: #FF5722"><p>...</p></div>
            </li>


            <li>
              <a href="dashboard.php?seccion=producto" class="collapsible-header"><i class="material-icons left indigo-text">important_devices</i>Productos</a>
              <div class="collapsible-body white-text" style="background-color: #FF5722"><p>...</p></div>
            </li>
            <li>
              <a href="dashboard.php?seccion=r_marca"><i class="material-icons left brown-text">branding_watermark</i>Marca</a>
            </li>
            <li>
              <a href="dashboard.php?seccion=r_modulo"><i class="material-icons left orange-text">view_module</i>Modulo</a>
            </li>

          </ul>
        </ul>
      </div>
  </nav>

<div class="container">


<!-- <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="images/sicla.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
</div> -->
<!-- <section>

    <h5>Facilidad de Uso</h5>
    <p>
      La facilidad de manejo de este software es muy amplia, nos hemos enfocado en hacer un producto con lógica,
      con lo suficiente y necesario para ser funcional. Además cuenta con una opción llamada “Ayuda”, en la cual se encontrara
      toda la información relacionada con cada una de las opciones que lleva programadas el sistema y acelerar la
      operación laboral conociendo toda esta amplia gama de opciones.
    </p>

      <h5>Control de Datos</h5>
      <p>
        Hemos dedicado la mayor parte de la creación de este software a conseguir la mejor forma de desplazamiento por el mismo, consiguiendo así
        la mayor productividad posible a  la hora de operar con este sistema de información que su prioridad es facilitarle las cosas al usuario.

      </p>
      <h5>Experiencia</h5>
      <p>
        Dado que este software es para registros de datos, no es muy necesario un diseño profesional, pero nosotros damos a los ojos
        del cliente una experiencia de usuario excelente para que a la utilizar este producto sea agradable en todos los
        sentidos con todos los requerimientos que lo hacen adaptado a los nuevos tiempos.
      </p>

</section> -->
