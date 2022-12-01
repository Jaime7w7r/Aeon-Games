<?php
//require_once 'basedatos.php';
if(isset($_POST)){
$Id='null';
$Name=$_POST['Name'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=password_hash($_POST['Password'],PASSWORD_BCRYPT,['cost'=>4]);
$Rol='user';
$Image="null";

$Sql="INSERT INTO Users VALUES($Id,'$Name','$LastName','$Email','$Password','$Rol',$Image)";
$Save=$conexion->query($Sql);
    if($Save){
        $_SESSION['User']=$Usuario->Email;
        if(!empty($_POST["remember"])) {
            setcookie ("username",$Name,time()+ 3600);
            setcookie ("password",$_POST['Password'],time()+ 3600);
            echo "Cookies Set Successfuly";
        } else{
            setcookie("username","");
            setcookie("password","");
            echo "cookies Not set";
        }
        
    }
}

?>