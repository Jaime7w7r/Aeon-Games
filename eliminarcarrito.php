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

        $eliminar = $_GET['e'];

            $sql = 'SELECT * from carrito';

            $resultado = $conexion -> query($sql);    
            while( $fila = $resultado ->  fetch_assoc()){
                $nombre = $fila['Nombre_Producto'];
                $cantidad = $fila['Cantidad'];
                if($nombre == $eliminar){
                    if($cantidad==1){
                        $sql="DELETE FROM carrito WHERE `carrito`.`Nombre_Producto` = '$nombre'";
                    }else{
                        $cantidad--;
                        $sql = "UPDATE carrito SET Cantidad='$cantidad' WHERE Nombre_Producto='$nombre'";
                    }

                }

            }



        $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos
        if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
            
        }//fin 

    }

?>