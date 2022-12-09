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
    <script src="carrito.js"></script>
    <link rel="stylesheet" href="estilos/carrito.css">
    <title>Aeon Games</title>
</head>

<body>
    <?php include 'header.php';?>

    <?php
    $sql = 'SELECT * from productos';
    $prod = $conexion -> query($sql);
    $numPro = 0;
    $total=0;
    while( $fila = $prod ->  fetch_assoc()){
        $nombre = $fila['Nombre'];
        $precio = $fila['Precio'];
        $categoria = $fila['Categoria'];
        $descripcion = $fila['Descripcion'];
        $existencia = $fila['Existencia'];
        $imagen = $fila['Imagen'];
        $sql = 'SELECT * from carrito';
        $car = $conexion -> query($sql);
        while( $fila = $car ->  fetch_assoc()){
            $nombre_carrito = $fila['Nombre_Producto'];
            $cantidad = $fila['Cantidad'];
            if($nombre_carrito == $nombre){
    ?>
            <script>
            array.push("<?php echo $nombre_carrito ?>");
            console.log(array);
            </script>
            <hr>

    <div class="container" style="margin-bottom: 15px;">
  <div class="row"   style="margin: 0 auto;">
    <div class=" col col-md-1 col-xl-1" style="padding: 0;">
      <img src="imagenes\Juegos\<?php echo $imagen ?>" style="width:90%; alt="...">
    </div>
    <div class="col col col-md-10 col-xl-4" style="min-width: 250px; padding: 0;">
      <h5><?php echo $nombre_carrito ?></h5>
      <h6>Cantidad: <?php echo $cantidad ?> </h6>
      <h6>Subtotal:$ <?php echo ($cantidad * $precio) ?> </h6>
    </div>
    <div class="col col-md-1 col-xl-1" style="padding: 0;">
        <div class="botones">
            <button type="button" class="buttonmas" id="<?php echo $numPro ?>"onclick="agregar(this.id);recargar();" <?php if($existencia<=$cantidad){echo 'disabled'; } ?>>˄</button>
            <button type="button" id="<?php echo $numPro ?>" class="buttonmenos"onclick="eliminar(this.id);recargar();">˅</button>
        </div>
    </div>
  </div>
</div>
<hr>


    <?php
        $total = $total + ($cantidad * $precio);
        $numPro = $numPro+1;
        } // fin de del if
            
        }//fin while carrito
    ?>
    <?php
        }//fin while productos
    ?>
    <button type="button">Pagar</button>
    <?php 
    include 'footer.php';?>
        <script>
            function recargar(){
                location.reload();
            }
        </script>
</body>

</html>