<?php

function IsLoged($SessionName){
    if(!isset($_SESSION[$SessionName])){
        header('Location: /ProyectoFinal/Aeon-Games/');
    }else{
        return TRUE;
    }
}

