	<!-- Formulario: Guardar componente -->
	<div class="container">
	 <div class="row">
			 <div class="card">
				 <div class="card-action indigo">
					 <a href="dashboard.php?seccion=rr_producto" class="btn-floating z-depth-0 indigo"><i class="material-icons">keyboard_backspace</i></a>
					 <button type="button" class="btn  indigo z-depth-0 white-text thin" style="margin-left:25%">Registro de componente</button>
				 </div>
				 <div class="card-content">

<form action="../controller/controller.componente.php" method="post"/>

	<label>Nombre del componente</label>
		<input name="nombre" type="text" required/>
	<label>Cantidad de componentes</label>
		<input type="number" name="cantidad" required="true"/>
	<button name="action" class="btn indigo thin" value="guardar">Guardar</button>
	<a href="consulta.componente.php">Consultar todo</a>
</form>

</div>
</div>
</div>
