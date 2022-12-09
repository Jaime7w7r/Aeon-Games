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

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imagenes\Juegos\<?php echo $imagen ?>" style="width:165px;height:180px;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nombre_carrito ?></h5>
                            <h6>Cantidad: <?php echo $cantidad ?> </h6>
                            <h6>Subtotal:$ <?php echo ($cantidad * $precio) ?> </h6>
                            <button type="button" class="btn btn-info" id="<?php echo $numPro ?>"
                            onclick="agregar(this.id);recargar();" <?php if($existencia<=$cantidad){echo 'disabled'; } ?>>Agregar</button>
                            <button type="button" id="<?php echo $numPro ?>" class="btn btn-danger" 
                            onclick="eliminar(this.id);recargar();">Eliminar</button>

                        </div>
                    </div>
                </div>
            </div>

    <?php
        $total = $total + ($cantidad * $precio);
        $numPro = $numPro+1;
        } // fin de del if
            
        }//fin while carrito
    ?>
    <?php
        }//fin while productos
    ?>
    <?php 
    include 'footer.php';?>
        <script>
            function recargar(){
                location.reload();
            }
        </script>
</body>

</html>