<!-- Jhon T. Gómez -->
  <ul id="dropdown1" class="dropdown-content" style="margin-top: 4.7%;">
    <li><a href="#!">Perfil</a></li>
    <li><a href="#!">Cuenta</a></li>
    <li class="divider"></li>
    <li>
      <a href="../Controller/cerrarsession.php" class="indigo-text">Salir</a>
    </li>
  </ul>
  <nav class="teal darken-3 z-depth-0" >
      <div class="nav-wrapper">
        <ul>
          <li>
            <a href="#" class="white-text blue-grey darken-3" style="width: 240px;"><?php echo "Usuario: " . $_SESSION["nombre"]; ?></a>
          </li>
      <!-- <a href="#"  ><i class="material-icons button-collapse" data-activates="slide-out">menu</i></a> -->
            <li class="right">
              <a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">more_vert</i></a>
            </li>
        </ul>
      </div>
    </nav>


    <ul class="side-nav fixed z-depth-0" id="mobile-demo">
      <ul class="collapsible grey lighten-4" data-collapsible="accordion" >
        <li>
          <a href="vigilante.php?p=inicio"class="collapsible-header" class="collapsible-header"><i class="material-icons left green-text">home</i>Inicio</a>
          <div class="collapsible-body indigo-text text-lighten-5" style="background-color: #673AB7"><p>...</p></div>
        </li>
        <li>
          <a href="vigilante.php?p=propietario" class="collapsible-header"><i class="material-icons left grey-text">person_pin</i>Propietarios</a>
        </li>
        <li>
          <a href="vigilante.php?p=producto"  class="collapsible-header"><i class="material-icons left grey-text">book</i>Producto</a>
        </li>
      
      </ul>
    </ul>
