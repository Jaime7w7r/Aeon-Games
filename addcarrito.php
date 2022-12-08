<?php
    
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='tienda_prueba';
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{

        $sql = 'SELECT * from carrito';
        $resultado = $conexion -> query($sql);

        $i=0;
        while( $fila = $resultado ->  fetch_assoc()){
            $i++;
        }

        $añadido = $_GET['q'];
        if ($i >0 ){
            $sql = 'SELECT * from carrito';
            $resultado = $conexion -> query($sql);
            $band = false;    
            while( $fila = $resultado ->  fetch_assoc()){
                $nombre = $fila['Nombre_Producto'];
                if($nombre == $añadido){
                    $cantidad = $fila['Cantidad'];
                    $cantidad++;
                    $sql = "UPDATE carrito SET Cantidad='$cantidad' WHERE Nombre_Producto='$nombre'";
                    $band=true;
                }
                if($band==false){
                    $sql = "INSERT INTO carrito (Nombre_Producto, Id_Usuario, Cantidad) VALUES('$añadido', '01','1' )";
                }
            }

        } else {
            $sql = "INSERT INTO carrito (Nombre_Producto, Id_Usuario, Cantidad) VALUES('$añadido', '01','1' )";
        }





        $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos
        if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
            
        }//fin 

    }

?>