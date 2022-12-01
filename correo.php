<html lang="es">
    <style>
body{
  font-family: 'Noto Sans', sans-serif;
  height:100vh;
  width: 100%;
  background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
 background-attachment: fixed;
}
    </style>
<body background="imagenes/fondo_contacto.jpg">
<?php
// Varios destinatarios
$para  = $_POST['introducir_email'];
// título
$título = 'Contacto Aeon Games';

// mensaje
$mensaje = '<html>
<head>
  <title>';
$mensaje.=$_POST['introducir_nombre'];

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
$cabeceras .= 'From: Contacto <aeondevuaa@gmail.com>' . "\r\n";

// Enviarlo
$success = mail($para, $título, $mensaje, $cabeceras);
if (!$success) {
    $errorMessage = error_get_last()['message'];
    echo 'mensaje no enviado';
}else{
  echo "<script> setTimeout(\"location.href='contacto.php'\",3000)</script>";
}
?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="javascript\sweetalert2.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

    
</body>

</html>