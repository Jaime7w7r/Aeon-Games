<?php
require_once 'basedatos.php';
if(isset($_POST)){
$Id='null';
$Name=$_POST['Name'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=password_hash($_POST['Password'],PASSWORD_BCRYPT,['cost'=>4]);
$Rol='user';
$Bloqueado='no';

$Sql="INSERT INTO Users VALUES($Id,'$Name','$LastName','$Email','$Password','$Rol', '$Bloqueado')";
$Save=$conexion->query($Sql);
    if($Save){
        $_SESSION['User']=$Usuario->Email;
        
    }
}

?>