<!DOCTYPE html>
<html lang="es">
 <?php require 'header.view.php';?>
 <?php require 'menu.view.php'; ?>
 

<div class="contenedor wrap">
	<h1 class="titulo">Contacto</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

		<img src="images/contacto/contactolapiraguarestaurante.png" title="Contacto" alt="contacto" id="portada"  /> <br/> <br/> <br/>
		<iframe  id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14360.09618119495!2d-97.500837!3d25.868686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1e554237d23b7e0!2sLa+Piragua+Restaurante!5e0!3m2!1sen!2smx!4v1473734312438" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		<br/><br/><br/><br/> 
			Nombre	Completo:
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
			Correo Electrónico:
			<input type="text" class="form-control" id="correo" name="correo" placeholder="Email@ejemplo.com" value="<?php if(!$enviado && isset($correo)) echo $correo ?>" >
			Teléfono:
			<input type="tel" id="telefono" name="telefono" placeholder="(868)5331258" value="<?php if(!$enviado && isset($telefono)) echo $telefono?>">
			Asunto:
			<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Empleo" value="<?php if(!$enviado && isset($asunto)) echo $asunto ?>">
			
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar mensaje">
			
			
		</form>
		<article>

		<p>
		Contactanos:
		Al (868)8137411
			o contacto@lapiraguarestaurante.com
			</p>
		</article>
	</div>
	

<?php require 'footer.view.php'; ?>