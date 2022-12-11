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