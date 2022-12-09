<?php
    session_start();   
    $_SESSION['User']=NULL;
    session_unset();
    header('Location: /ProyectoFinal/Aeon-Games/'); 

?>
