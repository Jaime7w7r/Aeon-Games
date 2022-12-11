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
    <link rel="stylesheet" type="text/css" href="estilos/pagos.css">
    <title>Aeon Games</title>
</head>

<body>
    <?php include 'header.php';?>
    <h5>Cupon 1: DESbee1 </h5>
    <h5>Cupon 2: desppe2</h5>
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
            $id = $fila['Id_Usuario'];
            if($nombre_carrito == $nombre && $id == $_SESSION['User']->Id ){
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
                    <h6>Subtotal:$ <?php echo number_format($cantidad * $precio) ?> </h6>
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
                <h5 class="card-title">Subtotal $<?php echo number_format($total) ?></h5>
                <p class="card-text"><?php echo $descuento ?></p>
                <a href="<?= isset($_SESSION['User']) ?  '' : 'LogInForm.php'?>" class="btn btn-primary" data-toggle="modal" data-target="#modalPassword">Comprar</a>
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

    <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Datos de Envio</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form" role="form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="modal-body">
                <div>
                    <label>Nombre completo</label><br>
                    <input type="text" name="nombre">
                </div>
                <div>
                    <label>Dirección Email <small>(Valoramos tu privacidad)</small></label><br>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>Dirección</label><br>
                    <input type="text" name="direccion">
                </div>
                <div>
                    <label>Ciudad</label><br>
                    <input type="text" name="ciudad">
                </div>
                <div>
                    <label>País</label><br>
                    <select name="pais">
                        <option name="selec">Selecciona un Pais</option>
                        <option name="mexico">México</option>
                        <option name="usa">Estados Unidos</option>
                        <option name="canada">Canada</option>
                        <option name="arg">Argentina</option>
                    </select>
                </div>
                <div>
                    <label>Codigo Postal</label><br>
                    <input type="number" name="cp">
                </div>
                <div>
                    <label>Numero Telefonico</label><br>
                    <input type="tel" name="telefono">
                </div>
             
                
            </div>
            <div class="modal-footer">                
                <div class="form-group">
                    <div class="btn-pago">
                        <button class="btn1" type="submit" name="pagoDC">Pago con tarjeta de Credito o Debito <img src="imagenes/pagotarjetas.png"></button>
                        <button class="btn2" type="submit" name="pagoOXXO">Pago en OXXO<img src="imagenes/oxxo.png"></button>
                    </div>  

                     <?php 
                        if(!empty($_POST['pagoDC'])){
                            header('Location: formularioPago.php');
                        }

                        if(!empty($_POST['pagoOXXO'])){
                            header('Location: pagoOXXO.php');
                        }

                    ?>             
               </div>
            </div>
            </form>
        </div>
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