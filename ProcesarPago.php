<?php
 if(isset($_POST['PayMethod']) /*&& !empty($_POST['nombre'])*/){
    if($_POST['PayMethod'] == 'CreditCard'){
        header('Location: formularioPago.php');
    }else{
        header('Location: crearPdf.php');
    }
}else{
    header('Location: index.php');
}
?>