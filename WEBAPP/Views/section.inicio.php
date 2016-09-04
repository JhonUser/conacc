<!-- Jhon T. Gómez -->
<header>
  <nav class="z-depth-0 lime">

      <ul>
        <li class="black-text">hhhh</li>
        <li class="right"><a href="#">Ir a la session</a></li>
        <li>yyyyy</li>
      </ul>

      <div class="top-nav nav-wrapper" >
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
          <ul class="side-nav fixed grey darken-4 thin" id="mobile-demo"><br>
              <li class="active lime lighten-2"><a href="#" ><?php echo "Hola, " . $_SESSION["nombre"]; ?></a></li>


              <select class="icons">
					 	    <option value="" disabled selected><?php echo "Hola, " . $_SESSION["nombre"]; ?></option>

					 		  <option value="" data-icon="images/user.png" class="left circle"></option>

					 		</select>

              <li><a href="#" class="waves-effect active">Inicio</a></li>
              <li><a href="dashboard.php?seccion=rol">Registro rol</a></li>
              <li><a href="dashboard.php?seccion=usuario" >Registro usuario</a></li>
              <li><a href="dashboard.php?seccion=propietario">Registro Propietario</a></li>
              <li><a href="dashboard.php?seccion=c.propietario">Consultar propietario</a></li>
              <li><a href="dashboard.php?seccion=producto">Producto</a></li>
              <li><a href="dashboard.php?seccion=r_marca">Registro marca</a></li> 
              <li><a href="dashboard.php?seccion=r_modulo">Registro modulo</a></li>

              <li><a href="../Controller/cerrarsession.php" class="waves-effect">Cerrar sesion</a></li>
          </ul>
      </div>

</nav>
</header>
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
