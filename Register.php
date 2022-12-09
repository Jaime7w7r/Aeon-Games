<?php
session_start();
require_once 'Users_Model.php';
require_once 'basedatos.php';
if(isset($_POST)){
$Id='null';
$Name=$_POST['Name'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=password_hash($_POST['Password'],PASSWORD_BCRYPT,['cost'=>4]);
$Rol='user';
$Bloqueado='no';

$Save=Register_User($Id,$Name,$LastName,$Email,$Password,$Rol,$Bloqueado,$conexion);
    if($Save){
        $User=getLastUser($conexion);
        $_SESSION['User']=$User;
        header('Location: /ProyectoFinal/Aeon-Games/');
        
    }
}

?>