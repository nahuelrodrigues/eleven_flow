<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$comentario = $_POST['mensaje'];

$header = "From: " . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0\r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su teléfono es: " . $telefono . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . "\r\n";
$mensaje .= "Mensaje: " . $comentario . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()). "\r\n";

$para = 'elevenflow995@gmail.com';
$asunto = 'Mensaje de mi sitio web ELEVEN FLOW';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
{
header("Location: ../pages/gracias.html");
} else {
header("Location: ../pages/404.html");
}

?>

