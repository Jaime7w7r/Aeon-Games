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
<div class="Container">
        <div class="row">
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
            <div class="col col-sm-12 col-md-4 col-lg-2" style="left: 3%; padding-bottom: 15px;">
                <img src="imagenes\Juegos\<?php echo $imagen ?>" style="width:165px;height:180px;" alt="...">
            </div>
            <div class="col col-sm-12 col-md-8 col-lg-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nombre_carrito ?></h5>
                    <h6>Cantidad: <?php echo $cantidad ?> </h6>
                    <h6>Subtotal:$ <?php echo ($cantidad * $precio) ?> </h6>
                    <button type="button" class="buttonmas " id="<?php echo $numPro ?>"
                        onclick="agregar(this.id);recargar();"
                        <?php if($existencia<=$cantidad){echo 'disabled'; } ?>>+</button>
                    <button type="button" id="<?php echo $numPro ?>" class="buttonmenos"
                        onclick="eliminar(this.id);recargar();">-</button>

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
        $descuento="";
        if(isset($_POST['button-addon2'])){

            if($_POST['cupon']=='AEONDES3'){
                $total=$total*0.7;
                $descuento='Se aplico el %30 de descuento';
            }
            if('DESbee1'==$_POST['cupon']){
                $total=$total*0.9;
                $descuento='Se aplico el %10 de descuento';
            }
            if('desppe2'==$_POST['cupon']){
                $total=$total-100;
                $descuento='Se descontaron $100';
            }


        }

    ?>      
</div>
</div>

    <div class="total">
        <div class="card w-200">
            <div class="card-body">
                <h5 class="card-title">Subtotal $<?php echo $total ?></h5>
                <p class="card-text"><?php echo $descuento ?></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cupon"
                    aria-label="Recipient's username" name="cupon" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="button-addon2" id="button-addon2">Aplicar</button>
                </div>
            </div>
            </form>
        </div>
    </div>


    <?php 
    include 'footer.php';?>
    <script>
    function recargar() {
        location.reload();
    }
    </script>
</body>

</html>