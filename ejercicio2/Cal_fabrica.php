<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de precios de gaseosas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		label {
			display: block;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Calculadora de precios de gaseosas</h1>
	<form method="post" action="calculadora.php">
		<label for="precio">Precio actual de la gaseosa:</label>
		<input type="number" name="precio" id="precio" required>
		<label for="cantidad">Cantidad de gaseosas adquiridas:</label>
		<input type="number" name="cantidad" id="cantidad" required>
		<button type="submit">Calcular</button>
	</form>
</body>
</html>
