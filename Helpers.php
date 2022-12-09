<?php

function IsLoged($SessionName){
    if(!isset($_SESSION[$SessionName])){
        header('Location: index.php');
    }else{
        return TRUE;
    }
}

