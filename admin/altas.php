<?php
    
    require_once '../basedatos.php';

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{


         //conexion exitosa

         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/
        
         if(isset($_FILES['imagen'])){
            print_r($_FILES);
            $nombre_imagen=$_FILES['imagen']['name'];
            $guardado = $_FILES['imagen']['tmp_name'];
            move_uploaded_file($guardado, '../imagenes/Juegos/'.$nombre_imagen);
            
         }

         if(isset($_POST['submit']) ){
                //obtenemos datos del formulario
                $nombre = $_POST['nombre'];
                $categoria =$_POST['categoria'];
                $descripcion =$_POST['descripcion'];
                $existencia =$_POST['existencia'];
                $precio =$_POST['precio'];
                $imagen =$_FILES['imagen']['name'];

                
                
                //hacemos cadena con la sentencia mysql para insertar datos
                $sql = "INSERT INTO productos (nombre, categoria, descripcion, existencia, precio, imagen) VALUES('$nombre','$categoria','$descripcion','$existencia', '$precio', '$imagen')";
                $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos
                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    echo '<script> alert("registro insertado") </script>';
                }//fin

            }

        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
        td,
        th {
            padding: 10px;

        }
        
    </style>
</head>

<body>
    
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/altas.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="altas.php">Altas</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/eliminar.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="eliminar.php">Eliminar</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/modificar.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="modificar.php">Modificar</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/consulta.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="grafica1.php">Graficas1</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/consulta.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="grafica2.php">Graficas2</a>
  </li>
  <li class="nav-item">
    <a class="<?php if ($_SERVER['PHP_SELF'] == "/cursophp/altas_bajas_consultas_modificacion_prueba/consulta.php"){ echo 'nav-link active'; }else{ echo 'nav-link'; } ?>" href="../index.php">Regresar_Tienda</a>
  </li>
</ul>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype="multipart/form-data">
                    <h2>Altas de productos</h2>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" class="form-control" name="categoria" id="categoria" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="existencia">Existencia</label>
                        <input name="existencia" type="number" class="form-control" id="existencia" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input name="precio" type="number" class="form-control" id="precio" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input name="imagen" type="file" class="form-control" id="imagen" placeholder="">
                    </div>
                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                </form>
            </div> <!-- fin col -->
        </div> <!-- fin row -->
    </div> <!-- fin container -->
    <br><br>
</body>

</html>
