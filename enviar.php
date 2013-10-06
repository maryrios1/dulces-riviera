<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$empresa = $_POST['empresa'];
$puesto = $_POST['puesto'];
$asunto = $_POST['asunto'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$ocupacion = $_POST['ocupacion'];

$header = 'De: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " y puesto: " . $puesto . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Sus datos personales incluyen - Sexo: " . $sexo . ", Edad: " . $edad . " y Ocupacion: " . $ocupacion . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'dulce_riviera@hotmail.com';

mail($para, $asunto, utf8_decode($mensaje), $header);

/*echo <<<EOT
<script> 
alert('¡Gracias por sus comentarios, Sr(ita). $nombre!'); 
</script> 
EOT;*/

header('Location: http://dulceriviera.com.mx/');
?>