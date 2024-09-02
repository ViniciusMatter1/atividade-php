<!DOCTYPE html>
<html>
<head>
	<title>Área do Triângulo</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Área do Triângulo</h1>
	<form action="calcular.php" method="POST">
		<label for="base">Base:</label>
		<input type="number" id="base" name="base"><br><br>
		<label for="altura">Altura:</label>
		<input type="number" id="altura" name="altura"><br><br>
		<input type="submit" value="Calcular Área">
	</form>
<?php
   if (isset($_POST['calcular'])) {
	$base = $_POST['base'];
	$altura = $_POST['altura'];

	$area = ($base * $altura) / 2;

	echo "<p>A área do triângulo é: " . $area . "</p>";

	if ($area > 100) {
		echo "<p>A área é maior que 100.</p>";
	} else {
		echo "<p>A área é menor ou igual a 100.</p>";
	}
}
?>
</body>
</html>