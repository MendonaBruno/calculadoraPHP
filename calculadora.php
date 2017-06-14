<html>
	<head>
	<meta charset="utf-8">
	<title>Calculadora em PHP</title>
		<body>
		    <h1>::Calculadora em PHP::</h1>
		    <br>
			<form method = "post" action = "calcular.php">
				Valor 1:
				<input type = "number" name = "v1" size = "5" />
				<select name = "op">
					<option selected = "selected" placeholder = "Selecione">Selecione</option>
					<option>Adição</option>
					<option>Subtração</option>
					<option>Multiplicação</option>
					<option>Divisão</option>
					<option>Potenciação</option>
				</select>
				Valor 2:
				<input type = "number" name = "v2" size = "5" />
				<input type = "submit" name = "calbtn" value = "Calcular">
			</form>
		</body>
	</head>
</html>