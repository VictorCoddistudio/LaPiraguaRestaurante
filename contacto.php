<?php /*session_start();

if (isset($_SESSION['usuario'])) {*/

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$tel = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];
	$asunto = $_POST['asunto'];
	
	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br />';
	}

	if(!empty($asunto)){
		$asunto = trim($asunto);
		$asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
	}else{
		$asunto.= 'Por favor ingresa un servicio valido';
	}

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br />';
	}

	if(!$errores){
		$enviar_a = 'contacto@lapiraguarestaurante.com';
		$asunto = 'Correo enviado desde lapiraguarestaurante.com';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Telefono: $telefono \n";
		$mensaje_preparado .= "Asunto: $asunto \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}



	require 'views/contacto.view.php';
	
/*else {
	header('Location: isndex.php');
}*/

?>