<?php

$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda_prueba';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'SELECT * from productos';
$resultado = $conexion -> query($sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="miestilo.css">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/altas.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="altas.php">Active</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/eliminar.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="eliminar.php">Eliminar</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/modificar.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="modificar.php">Modificar</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/consulta.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="consulta.php">Consultas</a>
  </li>
</ul>
<div class="container"> <br><br>

<div class="row">


<?php
    $numPro = 0;
?>
<script> var array=[];</script>
<?php
    $i=0;
        while( $fila = $resultado ->  fetch_assoc()){
            $i++;
        }
        
        mt_srand (time());
        $n = mt_rand(1,$i);
        echo $n;
?>

<?php
    $sql = 'SELECT * from productos';
    $resultado = $conexion -> query($sql);
    $encontrado=0;
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


    
    <div class="col-md-3 col-sm-6 ">
        <a href="#">
            <img class="img-fluid" width="250" height="250" src="imagenes/<?php echo $imagen ?>">
        </a>
        <p><?php echo $nombre ?></p>
        <p><?php 
        if($encontrado==$n){ ?>
            <del>$<?php echo $precio ?></del>
            <p>Descuento: $<?php echo $precio*.90 ?></p>
        <?php 
        }else{
            echo '$';
            echo $precio;
        }
        ?></p>
        <p>Categoria: <?php echo $categoria ?></p>
        <p>Descripcion: <?php echo $descripcion ?></p>
        <p>Existencia: <?php echo $existencia ?></p>
        <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
            <img class="img-fluid" src="imagenes/carrito_.png" alt="" width="50" height="15">
        </button>
    </div>
    

<?php
        $numPro = $numPro+1;
    }//fin while
?>

<script>
    console.log(array);    
    
    function agregar(id){
        var indice = parseInt(id);
        console.log(`Elegiste ${array[indice]}`);       
         
    }
    
</script>