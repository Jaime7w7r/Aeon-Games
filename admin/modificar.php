<?php
   session_start();
     
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='tienda_prueba';
     
    $_SESSION['sID'] = '';
    $_SESSION['snombre'] = '';
    $_SESSION['scategoria'] = '';
    $_SESSION['sdescripcion'] = '';
    $_SESSION['sexistencia'] = '';
    $_SESSION['sprecio'] = '';
    $_SESSION['simagen'] = '';

    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

if(isset($_POST['submit'])){
			$modificar = $_POST['modificar'];
			$_SESSION['modificar2'] = $modificar;
			$sql2 = "SELECT * FROM productos WHERE ID='$modificar'";
			$resultado = $conexion -> query($sql2);
			while( $fila = $resultado -> fetch_assoc()){
                $_SESSION['sID'] = $fila['ID'];
                $_SESSION['snombre'] = $fila['Nombre'];
                $_SESSION['scategoria'] = $fila['Categoria'];
                $_SESSION['sdescripcion'] = $fila['Descripcion'];
                $_SESSION['sexistencia'] = $fila['Existencia'];
                $_SESSION['sprecio'] = $fila['Precio'];
                $_SESSION['simagen'] = $fila['Imagen'];
			}
	}
	
    if(isset($_POST['mod'])){
		$uno = $_POST['ID2'];
		$dos = $_POST['nombre2'];
		$tres  = $_POST['categoria2'];
		$cuatro = $_POST['descripcion2'];
        $cinco =  $_POST['existencia2'];
        $seis = $_POST['precio2'];
        $siete = $_FILES['imagen2']['name'];

        
        if(file_exists('imagenes/'.$_SESSION['simagen']))
        {
           $nombre_imagen = $_SESSION['simagen'];
           unlink('imagenes/'.$nombre_imagen);
       }

        if(isset($_FILES['imagen2'])){
            print_r($_FILES);
            $nombre_imagen=$_FILES['imagen2']['name'];
            $guardado = $_FILES['imagen2']['tmp_name'];
            move_uploaded_file($guardado, '../imagenes/Juegos/'.$nombre_imagen);
         }





		$modificar1 = $_SESSION['modificar2'];
		
		$ne = "UPDATE productos SET ID='$uno', Nombre='$dos', Categoria='$tres', Descripcion='$cuatro', Existencia='$cinco',Precio='$seis', Imagen='$siete'  WHERE ID='$modificar1'";

        $fin = $conexion -> query($ne);
	}
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    
   
</head>

<body>
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
    <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">

            <?php        
         //continuamos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'SELECT * from productos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia
         
         if ($resultado -> num_rows){ //si la consulta genera registros
         ?>
                
          <div class="izqAlta">      
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
            
           <legend>Modificar Cuentas</legend>
                <br>
                <select   class="custom-select" name='modificar' >
                <?php
                $salida='<table>';
                while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    echo '<option value="'.$fila["ID"].'">'.$fila["Nombre"].'</option>';
                    //proceso de concatenacion de datos
                    $salida.= '<tr>';
                    $salida.= '<td>'. $fila['ID'] . '</td>';
                    $salida.= '<td>'. $fila['Nombre'] . '</td>';
                    $salida.= '<td>'. $fila['Categoria'] . '</td>';
                    $salida.= '<td>'. $fila['D'] . '</td>';
                    $salida.= '<td>'. $fila['Existencia'] . '</td>';
                    $salida.= '<td>'. $fila['Precio'] . '</td>';
                    $salida.= '<td>'. $fila['Imagen'] . '</td>';
                    $salida.= '</tr>';
                    }//fin while   
                    $salida.= '</table>';
                ?>
                </select>
                <br><br>
                <button type="submit" value="submit" name="submit">Modificar</button>               
            </form>
            </div> 
         <?php
        
         }
         else{
             echo "no hay datos";
         }
        
?>
        </div>
            <div class="izquierdaBaja">
                 <?php echo $salida ?>
            </div>
        </div>
        <div class="derecha">
        
            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype="multipart/form-data">
            <ul class="wrapper">
                <li class="form-row">
                <label for="ID">ID</label>
                <input type="number" name="ID2" id="ID" value="<?php echo $_SESSION["sID"]; ?>" >
                </li>
                <li class="form-row">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre2" value="<?php echo $_SESSION["snombre"]; ?>">
                </li>
                <li class="form-row">
                <label for="categoria">CATEGORIA</label>
                <input type="text" id="categoria" name="categoria2" value="<?php echo $_SESSION["scategoria"]; ?>">
                </li>
                <li class="form-row">
                <label for="descripcion">DESCRIPCION</label>
                <input type="text" id="descripcion" name="descripcion2" value="<?php echo $_SESSION['sdescripcion']; ?>">
                </li>
                <li class="form-row">
                <label for="existencia">EXISTENCIA</label>
                <input type="number" id="existencia" name="existencia2" value="<?php echo $_SESSION["sexistencia"]; ?>">
                </li>
                <li class="form-row">
                <label for="precio">PRECIO</label>
                <input type="number" id="precio" name="precio2" value="<?php echo $_SESSION["sprecio"]; ?>">
                </li>
                <li class="form-row">
                <label for="imagen">IMAGEN</label>
                <input type="file" id="imagen" name="imagen2" value="<?php echo $_SESSION["simagen"]; ?>">
                </li>
                <li class="form-row">
                <button type="submit" name="mod">Modificar</button>
                </li>
            </ul>
            </form>       
        </div>
    </div>
</body>
</html>