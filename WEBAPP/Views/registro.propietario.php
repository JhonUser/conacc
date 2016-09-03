 <!-- Jhon T. Gómez -->

 <div class="container">
  <h3>Registro de Propietarios</h3>
   <form action="../Controller/propietario.controller.php" method="post">
     <label for="ced">CC / T.I</label>
     <input type="text" name="ced"   required>
     <label for="nom">Nombre</label>
     <input type="text" name="nom"   required>
     <label for="ape">Apellido</label>
     <input type="text" name="ape"   required>
     <label for="tel">Telefono</label>
     <input type="number" name="tel" required>
     <label for="dir">Direccion</label>
     <input type="text" name="dir"   required>
     <label for="ema">Email</label>
     <input type="email" name="ema"  required>
     <label for="cen">Centro</label>
     <input type="text" name="cen"   required>
     <label for="car">Cargo</label>
     <input type="text" name="car"   required>
     <button class="right btn green" name="guardar">Guardar</button>
   </form>
  <a href="inicio.php?seccion=c.propietario">ir a consulta</a>
 </div>
