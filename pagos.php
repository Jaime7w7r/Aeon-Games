<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="1">
	<link rel="stylesheet" type="text/css" href="estilos/pagos.css">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<div class="btn-pago">
			<input class="btn1" type="submit" name="pagoDC" value="PAGO CON TARJETA DE DEBITO O CREDITO">
			<input class="btn2" type="submit" name="pagoOXXO" value="PAGO EN OXXO">
		</div>
	</form>

	<?php 
		if(!empty($_POST['pagoDC'])){
			header('Location: formularioPago.php');
		}

		if(!empty($_POST['pagoOXXO'])){
			header('Location: index.php');
		}

	?>
</body>
</html>