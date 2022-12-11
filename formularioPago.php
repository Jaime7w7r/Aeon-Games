<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="imagenes/logo.png">
	<title>Aeon Games</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta http-equiv="refresh" content="2">-->
	<link rel="stylesheet" type="text/css" href="estilos/estilosFormPagos.css">
	
</head>
<body>
	<?php include 'header.php';?>
	<div class="contenedor">
		<div class="contenedor1">
			<form action="PagoE.php" method="POST">
				<br>
			<h2>INGRESA TARJETA DE CREDITO O DEBITO</h2>
			<div align="center">
				<img class="imgTar" src="imagenes/tarjetas.png">
			</div>
			<div class="cont">
				<label>Nombre del Titular</label>
				<input type="text" name="titular" placeholder="Nombre completo">
			</div>
			<div class="cont">
				<label>Numero de la Tarjeta</label>
				<input type="text" name="tarjeta" placeholder="XXXX-XXXX-XXXX-XXXX">
			</div>
			<div class="two-fields">
				<div class="grupo-input">
					<label>Expiracion MM/AA</label>
					<input type="text" name="expiracionMes" placeholder="MM">
					<input type="text" name="expiracionAnio" placeholder="AA">
				</div>
				<div class="grupo-input">
					<label>CVC</label>
					<input type="number" name="cvc" maxlength="number 3" placeholder="CVC">
				</div>
			</div>
			<div class="cont">
				<input type="submit" name="enviarD" value="Enviar Datos de La tarjeta">
			</div>
		</form>
	</div>
		</div>
	<?php 
    include 'footer.php';?>
</body>
</html>