<?php
if(isset($_POST['enviar'])){
    if($_POST['Password']==$_POST['Password2']){
        include('Register.php');
        $contraseña_incorrecta="";
    }else{
        $contraseña_incorrecta = 'Las contraseñas no son iguales';
    }
}else{
    $contraseña_incorrecta="";
}

?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="estilos/estiloIniReg1.css">

    <title></title>

</head>

<body background='imagenes\chicas-gamer.jpg'>

    <div class="login-box">
        <div id="logo_div"><a href="index.php"><img id="img" src="imagenes\logo.png" alt=""></a>
            <h2>Registrar Usuario</h2>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="user-box">
                <input type="text" name="Name" required>
                <label class="lab1">Nombre</label>
            </div>
            <div class="user-box">
                <input type="text" name="LastName" required>
                <label class="lab1">Apellidos</label>
            </div>
            <div class="user-box">
                <input type="text" name="Email" required>
                <label class="lab1">Correo Electronico</label>
            </div>
            <div class="user-box">
                <input type="password" name="Password" required>
                <label class="lab1">Contraseña</label>
            </div>
            <div class="user-box">
                <input type="password" name="Password2" required>
                <label class="lab1">Confirmar Contraseña</label>
            </div>
            <div>
                <p style="color: #fff; text-shadow: 0 0 3px #ff0000; text-size"><?php echo $contraseña_incorrecta ?></p>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" name="enviar" value="registrar">
            </div>
        </form>
        <br>
        <br>
        <div class="reg">
            <small><a href="LogInForm.php">Iniciar Sesion</a></small>
        </div>

    </div>
</body>

</html>