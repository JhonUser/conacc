<!-- Jhon T. Gómez -->
  <nav class="blue-grey darken-2 z-depth-0" >
      <div class="nav-wrapper">
        <ul>
          <li>
            <a href="#" class="white-text thin" style="background: #3c948b; width: 240px;"><?php echo "Bienvenido, " . $_SESSION["nombre"]; ?></a>

          </li>
          <li class="right">
            <a href="../Controller/cerrarsession.php" class="grey darken-3 thin 500" id="cerrar"><i class="material-icons right white-text">trending_down</i>Cerrar sesion</a>
            <!-- <a href="#"  ><i class="material-icons button-collapse" data-activates="slide-out">menu</i></a> -->
          </li>
        </ul>
      </div>
    </nav>


    <ul class="side-nav fixed z-depth-0" id="mobile-demo">
              <ul class="collapsible grey lighten-4" data-collapsible="accordion" >
                <li>
                  <a href="dashboard.php?seccion=<?php echo base64_encode('inicion') ?>"class="collapsible-header" class="collapsible-header"><i class="material-icons left green-text">home</i>Inicio</a>
                  <div class="collapsible-body indigo-text text-lighten-5" style="background-color: #673AB7"><p>...</p></div>
                </li>
                <li>
                  <a href="dashboard.php?seccion=rol" class="collapsible-header"><i class="material-icons left red-text">control_point</i>Rol</a>

                </li>
                <li>
                  <a href="dashboard.php?seccion=usuario" class="collapsible-header"><i class="material-icons left yellow-text">person_add</i>Usuarios</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=r_propietario" class="collapsible-header"><i class="material-icons left teal-text">person_pin</i>Propietarios</a>
                  <!-- <div class="collapsible-body white-text" style="background-color: #FF5722"><p>...</p></div> -->
                </li>

                <li>
                  <a href="dashboard.php?seccion=rr_producto"  class="collapsible-header"><i class="material-icons left">book</i>Asignar producto</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=r_accesorio"  class="collapsible-header"><i class="material-icons left">extension</i>Accesorio</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=r_permiso"  class="collapsible-header"><i class="material-icons left">pan_tool</i>Permisos</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=r_modulo"  class="collapsible-header"><i class="material-icons left orange-text">view_module</i>Modulo</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=producto" class="collapsible-header"><i class="material-icons left indigo-text">important_devices</i>Productos</a>
                </li>
              </ul>
            </ul>
