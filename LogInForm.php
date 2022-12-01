<?php
session_start();
$message = '';
if ( isset($_POST['captcha1']) && ($_POST['captcha1']!="")){
	if(strcasecmp($_SESSION['captcha'], $_POST['captcha1']) != 0){
		$message = "¡Ha introducido un código de seguridad incorrecto! Inténtelo de nuevo.";
	}else{
		$message = "Ha introducido el código de seguridad correcto."; 
	}
} else {
	$message = "Introduzca el código de seguridad."; 
}
include('main/headerSesionCapt.php');
?>
<script src="javascript\load_captcha.js"></script>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="estilos/estiloIniReg1.css">

    <title></title>


</head>

<body background='imagenes\chicas-gamer.jpg'>
    <div class="login-box" id="resp">
    <div id="logo_div"><a href="index.php"><img id="img" src="imagenes\logo.png" alt=""></a>
            <h2>Inicio de Sesion</h2>
        </div>
        <form action="LogIn.php" method="POST" id="formu">
            <div class="user-box">
                <input type="text" name="Email" value="<?php if(isset($_COOKIE["Email"])) { echo $_COOKIE["Email"]; } ?>" required>
                <label class="lab1">Correo Electronico</label>
            </div>
            <div class="user-box">
                <input type="password" name="Password"  value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
                <label class="lab1">Contraseña</label>
            </div>

            <div class="captcha user-box">
                <div class="form-group">
                    <!--<label for="captcha" class="text-info">
                        <?php if($message) { ?>
                        <span class="text-warning"><strong><?php echo $message; ?></strong></span>
                        <?php } ?>
                    </label><br>-->
                    <input type="text" name="captcha1" id="captcha1" class="form-control"  required>
                    <label class="lab1">Codigo de Seguridad</label>
                </div>

                <div class="form-group">
                    <label class="control-label"> <img style="border: 1px solid #D3D0D0" src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'></label>

                    <div class="user-box"><br>
                        <a href="javascript:void(0)" id="reloadCaptcha"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a><label style="color: #fff;">Recargar</label>
                    </div>
                </div>
            </div>


            <div class="posicionRecor">
                <input type="checkbox" name="remember">
                <label style="color:#fff;">Recordar usuario y contraseña.</label>
            </div>
            <div>
            	<span></span>
            	<span></span>
            	<span></span>
            	<span></span>
                <input type="submit" id="btn" name="enviar" value="Inciar Sesion">
            </div>
        </form>
        <br>
        <br>
        <div class="reg">
        	<small><a href="RegisterForm.php">Registrarse</a></small>
    	</div>
    </div>

    

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

</body>

</html>
