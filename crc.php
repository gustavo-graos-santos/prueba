<?php
	$destinatario = 'gustavograos01@gmail.com';

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$tema = $_POST['tema'];
	$mensaje = $_POST['mensaje'];
	$fechareg = date("d / m / y");

	$header = "Formulario De Gustavo RGS-Portafolio";
	$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nEmail: " . $email . "\nTema: " . $tema . "\nFecha: " . $fechareg; 
	mail($destinatario, $header, $mensajeCompleto);
	echo "<script>alert('Correo Enviado Exitosamente')</script>";
	echo "<script> setTimeout(\"location.href='portafolio.php'\",1000)</script>";
?>	