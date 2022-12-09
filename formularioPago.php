<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta http-equiv="refresh" content="2">-->
	<link rel="stylesheet" type="text/css" href="estilos/estilosFormPagos.css">
	
</head>
<body>
	<div class="contenedor">
		<form action="" method="POST">
		<h2>INGRESA TARJETA DE CREDITO O DEBITO</h2>
		<div class="cont">
			<label>Nombre del Titular</label>
			<input type="text" name="titular">
		</div>
		<div class="cont">
			<label>Numero de la Tarjeta</label>
			<input type="text" name="tarjeta">
		</div>
		<div class="two-fields">
			<label>Fecha de Expiracion MM/AA</label>
			<div class="grupo-input">
				<input type="text" name="expiracionMes">
				<input type="text" name="expiracionAnio">
			</div>
			<label>CVC</label>
			<div>
				<input type="text" name="cvc">
			</div>
		</div>
		<div class="cont">
			
		</div>
	</form>
	</div>
</body>
</html>