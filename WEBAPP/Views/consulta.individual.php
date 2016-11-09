
<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-action red darken-4">
				<button type="button" class="btn red darken-4 z-depth-0 white-text thin" style="margin-left:25%">Consulta entradas por cedula</button>
			</div>
				<div class="card-content">
					<form action="dashboard.php?seccion=ced" method="post">  
						<div class="row" id="trato">
							<div class="input-field col s10">
								<i class="material-icons prefix grey-text">control_point</i>
								 <input type="number" min="0" name="cedula" id="nom" class="validate" required>
								<label for="nom">Cedula</label>
					
							</div>
						</div>
						<div class="card-action grey lighten-3">
				<button type="submit" value="Guardar" class="btn thin teal" name="action">Consultar</button>
					</form>
				</div>
				</div>
		</div>
	</div>
</div> 