<?php
require_once '../basedatos.php';
if ($conexion->connect_errno) {
    die('Error en la conexion');
} else {
    //conexion exitosa
    
    if (isset($_POST["submit"])) {
        //obtenemos datos del formulario

        $eliminar = $_POST['eliminar'];

        $sql= "SELECT * FROM productos WHERE ID='$eliminar'";
        $resultado = $conexion->query($sql);
        $imagen = $resultado ->  fetch_assoc();
        $nombre_imagen = $imagen['Imagen'];
        unlink('../imagenes/Juegos/'.$nombre_imagen);

        //hacemos cadena con la sentencia mysql para eliminar
        $sql = " DELETE FROM productos WHERE ID='$eliminar'";
        $conexion->query($sql);
        if ($conexion->affected_rows >= 1) { //revisamos que se elimino
            echo '<br> registro borrado <br>';
        } //fin
    } //fin

    //continuamos con la consulta de datos a la tabla usuarios
    //vemos datos en un tabla de html
    $sql = 'select * from productos'; //hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla'
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows) {

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
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
        <div>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method='POST'>
                <legend>Eliminar Cuentas</legend>
                <br>
                <select class="browser-default custom-select" name='eliminar'>
                    <?php
                    while ($fila = $resultado->fetch_assoc()) { //recorremos los registros obtenidos de la tabla
                        echo '<option value="' . $fila["ID"] . '">' . $fila["Nombre"] .'</option>';
                    }
                    ?>
                </select>
                <br><br>
                <button type="submit" value="submit" name="submit">Eliminar</button>
            </form>
        </div>
<?php

    } else {
        echo "no hay datos";
    }
}

?>