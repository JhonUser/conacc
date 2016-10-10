<!-- Jhon T. Gómez -->
<nav class="grey lighten-2 z-depth-0" >
      <div class="nav-wrapper">
        <ul>
          <li>
            <a href="#" class="white-text thin largue" style="background: #3c948b;"><?php echo "Bienvenido, " . $_SESSION["nombre"]; ?></a>
            <!-- <a href="../Controller/cerrarsession.php" class="grey white-text thin 500" id="cerrar"><i class="material-icons right white-text">trending_down</i>Cerrar sesion</a> -->
          </li>
          <li>
            <a href="#"  ><i class="material-icons button-collapse" data-activates="slide-out">menu</i></a>
</li>

        </ul>

      </div>
    </nav>


    <ul class="side-nav fixed z-depth-0" id="mobile-demo">
              <ul class="collapsible" data-collapsible="accordion" >
                <!-- <li>
                  <a href="dashboard.php?seccion=<?php echo base64_encode('inicion') ?>" class="waves-effect active" class="collapsible-header"><i class="material-icons left green-text">home</i>Inicio</a>
                  <div class="collapsible-body indigo-text text-lighten-5" style="background-color: #673AB7"><p>...</p></div>
                </li> -->
                <li>
                  <a href="dashboard.php?seccion=rol" class="collapsible-header"><i class="material-icons left red-text">control_point</i>Rol</a>

                </li>
                <li>
                  <a href="dashboard.php?seccion=usuario" class="collapsible-header"><i class="material-icons left yellow-text">person_add</i>Usuarios</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=r_propietario" class="collapsible-header"><i class="material-icons left teal-text">person_pin</i>Propietarios</a>
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
                <li>
                  <a href="dashboard.php?seccion=r_permiso"><i class="material-icons left">pan_tool</i>Permisos</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=rr_producto"><i class="material-icons left">book</i>Asignar producto</a>
                </li>
                <li>
                  <a href="dashboard.php?seccion=r_accesorio"><i class="material-icons left">extension</i>Accesorio</a>
                </li>
              </ul>
            </ul>
