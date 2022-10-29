<?php

/* Conectamos el form con el server  */

$nombre = $_POST['name'];
$apellido = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

/* como nos llega el cuerpo del mail */

$mensaje = "Este mensaje fue enviado por " . $nombre . ",/r/n";
$mensaje .= "Su e-mail es: " . $mail . " /r/n";
$mensaje .= "El asunto es: " . $asunto . " /r/n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " /r/n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$destinatario = 'lucianobertolano@gmail.com'
$asunto = 'Este mail fue enviado desde Arquitectura Perdida'

/* Funcion mail */
/* a quien le envio el mail */
mail($destinatario, $asunto, utf8_decode($mensaje), $header);

/* Redireccion despues de enviar el formulario */
header('Location:exito.html');

?>
