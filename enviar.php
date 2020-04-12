<?php 

//Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario="ruben_ventura@outlook.es";
$asunto = "Contacto desde mi web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $mensaje";

//Enviando el mensaje

mail($destinatario, $asunto, $carta)


 ?>