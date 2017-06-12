<!DOCTYPE html>
<html lang="es">
 <?php require 'header.view.php';?>
 <?php require 'menu.view.php'; ?>


	 	<div class="contenedor">
		</div>

		<div class="contenedor wrap">

		<h1 class="titulo">Bolsa de Trabajo</h1>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<img src="images/bolsadetrabajo/bolsadetrabajopiraguarestaurante.png" title="Contacto" alt="contacto" id="portada"  /> <br/><br/><br/><br/><br/><br/>
				Nombre	Completo:
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo:" value="">
				Correo Electrónico:
				<input type="text" class="form-control" id="correo" name="correo" placeholder="Email@ejemplo.com" value="">
				Teléfono:
				<input type="tel" name="telefono" placeholder="(868)5331258">
				Asunto:
				<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Empleo">

				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>
				<input type="submit" name="submit" class="btn btn-primary" value="Enviar ">
			</form>
		</div>



<?php require 'footer.view.php'; ?>
