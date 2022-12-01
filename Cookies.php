<?php
if(!empty($_POST["remember"])) {
    setcookie ("username",$_POST["Email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    echo "Cookies Set Successfuly";
} else{
    setcookie("username","");
    setcookie("password","");
    echo "cookies Not set";
}

?>
<p><a href="index.php"> Go to Login Page </a> </p>