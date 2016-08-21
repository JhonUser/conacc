<?php
	require_once("../Model/conexion.php");
	require_once("../Model/propietario.class.php");
	$codigo = registro::consultar_();

?>

	<h1>Modificar Propietario</h1>
	<form action="#" method="post">
			<input type="hidden" name="codigo" value=" <?php echo $codigo["propie_cod"]; ?>"/>
		<label>Documento</label>
			<input type="text" name="documento" value=" <?php echo $codigo["propie_docu"]; ?>" required/>
		<label>Nombre</label>
			<input type="text" name="nombre" value=" <?php echo $codigo["propie_nombre"]; ?>"required/>
		<label>Apellido</label>
			<input type="text" name="apellido" value=" <?php echo $codigo["propie_apelli"]; ?>"required/>
		<label>Emai</label>
			<input type="email" name="text" value=" <?php echo $codigo["propie_tel"]; ?>"required/>
		<label>Telefono</label>
			<input type="text" name="telefono" value=" <?php echo $codigo["propie_dire"]; ?>"/>
		<label>Nombre de </label>
			<input type="text" name="nombredeusuario" value=" <?php echo $codigo["propie_email"]; ?>"required/>
		<button value="Modificar" name="action">Modificar</button>
	</form>
