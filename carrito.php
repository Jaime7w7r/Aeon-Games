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
                <a href="<?= isset($_SESSION['User']) ?  '' : 'LogInForm.php'?>" class="btn btn-primary"
                    data-toggle="modal" data-target="#modalPassword">Comprar</a>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cupon" aria-label="Recipient's username"
                        name="cupon" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="button-addon2"
                            id="button-addon2">Aplicar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Datos de Envio</h3>
                    <button type="button" class="close font-weight-light" data-dismiss="modal"
                        aria-hidden="true">×</button>
                </div>
                <form class="form" role="form" action="ProcesarPago.php" method="post">
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
                        <br/>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PayMethod" value="CreditCard" id="CreditCard" checked>
                            <label class="form-check-label btn1" for="flexRadioDefault1">
                                <img src="imagenes/pagotarjetas.png">
                                Pago con tarjeta de Credito o Debito
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PayMethod" value="Oxxo" id="CreditCard"
                                >
                            <label class="form-check-label btn2" for="flexRadioDefault2">
                                <img src="imagenes/oxxo.png">
                                Pago en OXXO
                            </label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="btn-pago">
                                <button class="btn btn-primary" type="submit" value="Registrar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
       

    ?>
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