<?php
require_once 'basedatos.php';
session_start();
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
                $_SESSION['User']=$Usuario;
                if(!empty($_POST["remember"])) {
                    setcookie ("username",$_POST["Email"],time()+ 3600);
                    setcookie ("password",$_POST["password"],time()+ 3600);
                } else{
                    setcookie("username","");
                    setcookie("password","");
                }
                header('Location: index.php');
            }else{
                header('Location: LogInForm.php');
            }
        }

    }else if($captchaCookie != sha1($captcha)){
        header('Location: LogInForm.php');

    }
}

?>