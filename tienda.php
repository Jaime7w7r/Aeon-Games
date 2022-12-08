<?php/*En la opción de tienda deben aparecer todos los productos que venden (con la información de la tabla de
productos que se considere pertinente y la posibilidad de agregar el producto al carrito de compra
(botón)), PERO EN ALGUN LADO, deben tener algún filtro para elegir solo ver los productos de alguna de
las dos categorías.*/ ?>
<?php

$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda_prueba';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'SELECT * from productos';
$resultado = $conexion -> query($sql);

if(isset($_POST['submit'])){
    $cat=$_POST['categoria'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeon Games</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="estilos/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="estilos/glitch.css">
    <link rel="stylesheet" href="estilos/categorias.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="javascript\scrollreveal.js"></script>
    <script src="carrito.js"></script>
</head>

<body style="background: rgb(11,4,14);
background: linear-gradient(0deg, rgba(11,4,14,0.7763480392156863) 22%, rgba(142,118,240,0.7343312324929971) 71%);">
    <?php include 'header.php';?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formulario">
        <div class="radio">
            <h4>Categorias</h4>
            <?php 
    $sql = 'SELECT Categoria from productos GROUP BY(Categoria)';
    $resultado = $conexion -> query($sql);
    while( $fila = $resultado ->  fetch_assoc()){ 
        $categoria = $fila['Categoria'];
        ?>

            <input type="radio" name="categoria" id="<?php echo $categoria ?>" value="<?php echo $categoria ?>">
            <label for="<?php echo $categoria ?>"><?php echo $categoria ?></label>
            <?php
    }
    ?>
            <button type="submit" value="submit" name="submit" class="btn btn-info">Filtrar</button>
            <a href="tienda.php" class="btn btn-danger">Eliminar Filtro</a>
        </div>
    </form>


    <div class="container text-center">
        <div class="container">
            <div class="row">


                <?php
    $numPro = 0;
?>
                <?php
    $i=0;
    $sql = 'SELECT * from productos';
    $resultado = $conexion -> query($sql);
        while( $fila = $resultado ->  fetch_assoc()){
            $i++;
        }
        
        mt_srand (time());
        $n = mt_rand(1,$i);
?>

                <?php
    $sql = 'SELECT * from productos';
    $resultado = $conexion -> query($sql);
    $encontrado=0;

    if(isset($cat)){
        while( $fila = $resultado ->  fetch_assoc()){
            if($cat==$fila['Categoria']){
                $nombre = $fila['Nombre'];
                $precio = $fila['Precio'];
                $categoria = $fila['Categoria'];
                $descripcion = $fila['Descripcion'];
                $existencia = $fila['Existencia'];
                $imagen = $fila['Imagen'];
                $encontrado++;
            ?>
                <script>
                array.push("<?php echo $nombre ?>");
                </script>

                <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
                    <div id="<?php echo $numPro ?>toast" class="toast hide" role="alert" aria-live="assertive"
                        aria-atomic="true" data-delay="3000">
                        <div class="toast-header">
                            <img src="imagenes\Juegos\<?php echo $imagen ?>" style="width:35px;height:50px;"
                                class="rounded mr-2" alt="...">
                            <strong class="mr-auto"><?php echo $nombre ?></strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <p>Se a ahregado <?php echo $nombre ?> al carrito</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img src="imagenes\Juegos\<?php echo $imagen ?>" alt="Product"
                                class="img-responsive" />
                        </div>
                        <br><br>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span><?php echo $categoria ?></span>
                            </div>
                            <div class="title-product">
                                <h3><?php echo $nombre ?></h3>
                            </div>
                            <div class="description-prod">
                                <p> <?php echo $descripcion ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span
                                        class="price"><?php if($encontrado==$n){ ?><del>$<?php echo $precio ?></del>
                                        <p>$<?php echo $precio*.90 ?></p><?php }else{echo '$';echo $precio;}?>
                                    </span></div>
                                <div class="wcf-right"><button type="button" class="buy-btn"
                                        id="<?php echo $numPro ?>btn"><i class="zmdi zmdi-shopping-basket"><img
                                                src="imagenes/imagei.png" width="60%" id="<?php echo $numPro ?>"
                                                onclick="agregar(this.id);elegido(this.id);"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <?php
                $numPro = $numPro+1;
            }//fin while
            }
          
    }else{
        while( $fila = $resultado ->  fetch_assoc()){
            $nombre = $fila['Nombre'];
            $precio = $fila['Precio'];
            $categoria = $fila['Categoria'];
            $descripcion = $fila['Descripcion'];
            $existencia = $fila['Existencia'];
            $imagen = $fila['Imagen'];
            $encontrado++;
        ?>
                <script>
                array.push("<?php echo $nombre ?>");
                </script>

                <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
                    <div id="<?php echo $numPro ?>toast" class="toast hide" role="alert" aria-live="assertive"
                        aria-atomic="true" data-delay="3000">
                        <div class="toast-header">
                            <img src="imagenes\Juegos\<?php echo $imagen ?>" style="width:35px;height:50px;"
                                class="rounded mr-2" alt="...">
                            <strong class="mr-auto"><?php echo $nombre ?></strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <p>Se a ahregado <?php echo $nombre ?> al carrito</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img src="imagenes\Juegos\<?php echo $imagen ?>" alt="Product"
                                class="img-responsive" />
                        </div>
                        <br><br>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span><?php echo $categoria ?></span>
                            </div>
                            <div class="title-product">
                                <h3><?php echo $nombre ?></h3>
                            </div>
                            <div class="description-prod">
                                <p> <?php echo $descripcion ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span
                                        class="price"><?php if($encontrado==$n){ ?><del>$<?php echo $precio ?></del>
                                        <p>$<?php echo $precio*.90 ?></p><?php }else{echo '$';echo $precio;}?>
                                    </span></div>
                                <div class="wcf-right"><button type="button" class="buy-btn"
                                        id="<?php echo $numPro ?>btn"><i class="zmdi zmdi-shopping-basket"><img
                                                src="imagenes/imagei.png" width="60%" id="<?php echo $numPro ?>"
                                                onclick="agregar(this.id);elegido(this.id);"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <?php
            $numPro = $numPro+1;
        }//fin while
    }

    while( $fila = $resultado ->  fetch_assoc()){
        $nombre = $fila['Nombre'];
        $precio = $fila['Precio'];
        $categoria = $fila['Categoria'];
        $descripcion = $fila['Descripcion'];
        $existencia = $fila['Existencia'];
        $imagen = $fila['Imagen'];
        $encontrado++;
    ?>
                <script>
                array.push("<?php echo $nombre ?>");
                </script>

                <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
                    <div id="<?php echo $numPro ?>toast" class="toast hide" role="alert" aria-live="assertive"
                        aria-atomic="true" data-delay="3000">
                        <div class="toast-header">
                            <img src="imagenes\Juegos\<?php echo $imagen ?>" style="width:35px;height:50px;"
                                class="rounded mr-2" alt="...">
                            <strong class="mr-auto"><?php echo $nombre ?></strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <p>Se a ahregado <?php echo $nombre ?> al carrito</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img"><img src="imagenes\Juegos\<?php echo $imagen ?>" alt="Product"
                                class="img-responsive" />
                        </div>
                        <br><br>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span><?php echo $categoria ?></span>
                            </div>
                            <div class="title-product">
                                <h3><?php echo $nombre ?></h3>
                            </div>
                            <div class="description-prod">
                                <p> <?php echo $descripcion ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span
                                        class="price"><?php if($encontrado==$n){ ?><del>$<?php echo $precio ?></del>
                                        <p>$<?php echo $precio*.90 ?></p><?php }else{echo '$';echo $precio;}?>
                                    </span></div>
                                <div class="wcf-right"><button type="button" class="buy-btn"
                                        id="<?php echo $numPro ?>btn"><i class="zmdi zmdi-shopping-basket"><img
                                                src="imagenes/imagei.png" width="60%" id="<?php echo $numPro ?>"
                                                onclick="agregar(this.id);elegido(this.id);"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <?php
        $numPro = $numPro+1;
    }//fin while


?>

            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
    <script>
    function elegido(id) {
        var indice = parseInt(id);
        $(`#${indice}btn`).click(function() {
            $(`#${indice}toast`).toast('show');
        });
    }
    </script>

</body>

</html>