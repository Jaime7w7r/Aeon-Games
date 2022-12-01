<?php
if(isset($_SESSION['User'])){
    $_SESSION['User']=null;
    unset($_SESSION[$Name]);

}

header("Location: index.php");
?>