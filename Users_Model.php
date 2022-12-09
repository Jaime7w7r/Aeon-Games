
<?php

function Register_User($Id,$Name,$LastName,$Email,$Password,$Rol, $Bloqueado,$conexion){
    $Sql="INSERT INTO Users VALUES($Id,'$Name','$LastName','$Email','$Password','$Rol', '$Bloqueado')";
    $Save=$conexion->query($Sql);
    return $Save;
}

function getLastUser($conexion){
    $Sql="SELECT * FROM `users` ORDER BY Id DESC";
    $Query=$conexion->query($Sql);
    $User=$Query->fetch_assoc();
    return $User;
}
?>