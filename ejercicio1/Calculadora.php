<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de sueldo vendedor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Calculadora de sueldo vendedor</h1>
	<form method="POST" action="calcular.php">
		<label for="totalVendido">Importe total vendido del mes:</label>
		<input type="number" name="totalVendido" id="totalVendido" required>
		<label for="hijosEscolar">Cantidad de hijos en edad escolar:</label>
		<input type="number" name="hijosEscolar" id="hijosEscolar" required>
		<button type="submit">Calcular sueldo</button>
	</form>
</body>
</html>
