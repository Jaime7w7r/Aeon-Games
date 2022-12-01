<?php
// Varios destinatarios
$para  = $_POST['emal'];
// título
$título = 'Contacto Aeon Games';

// mensaje
$mensaje = '<html>
<head>
  <title>';
$mensaje.=$_POST['nombre'];

$mensaje.=' gracias por contactarnos:</title>
</head>
<body>
  <h3>Su respuesta esta siendo procesada</h3>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Contacto <al299459@edu.uaa.mx>' . "\r\n";

// Enviarlo
$success = mail($para, $título, $mensaje, $cabeceras);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}else{
    echo 'correo enviado';
}

?>