<?php

$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda_prueba';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <title>Aeon Games</title>
</head>

<body>
    
    <div style=" position: absolute;
    bottom: 0; width: 100%;"><?php 
    include 'footer.php';?></div>
    <script>
    function recargar() {
        location.reload();
    }
    </script>
</body>

</html>