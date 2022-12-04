<?php
require_once 'basedatos.php';
if(isset($_POST)){
    
    $Email=isset($_POST['Email']) ? $_POST['Email']:false;
    $Password = isset($_POST['Password']) ? $_POST['Password']:false;

    $captchaCookie = $_COOKIE['captcha1'];
    $captcha = $_POST['captcha1'];

    if(($Email && $Password) && $captchaCookie == sha1($captcha)){
        $Sql="SELECT * FROM Users WHERE Email='$Email'";
        $LogIn=$conexion->query($Sql);
        if($LogIn && $LogIn->num_rows == 1){
            $Usuario= $LogIn->fetch_object();
            $Verify=password_verify($Password,$Usuario->Password);
            if($Verify){
                $_SESSION['User']=$Usuario->Email;
                header('Location: index.php');
            }else{
                header('Location: LogIn.php');
            }
        }
    }else if($captchaCookie != sha1($captcha)){
        echo "captcha Incorrecto";
    }
}

?>