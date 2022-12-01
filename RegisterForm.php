<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="estilos/estiloIniReg.css">

	<title></title>

</head>
<body>
	<div class="login-box">
		<h2>Registrar Usuario</h1>
		<form action="Register.php" method="post">
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
	        <div>
	        	<span></span>
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
  