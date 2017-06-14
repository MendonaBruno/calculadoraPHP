<?php
	//include ("./calcular.php");

	$v1 = $_POST['v1'];
	$v2 = $_POST['v2'];
	$op = $_POST['op'];

	switch ($op) 
	{
		case 'Adição':
			$resultado = $v1 + $v2;
		break;

		case 'Subtração':
			$resultado = $v1 - $v2;
		break;	
		
		case 'Multiplicação':
			$resultado = $v1 * $v2;
		break;

		case 'Divisão':
			if ($v2 >= 0)
			{
				$resultado = $v1 / $v2;
			} elseif ($v2 <= 0) {
				$resultado = 0;
			}
			
		break;

		case 'Potenciação':
			$resultado = pow($v1, $v2);
		break;

		default:
			echo "Atenção: Selecione uma operação!";
		break;
	}
	if ($resultado != 0) {
		echo "<h1>::Calculadora em PHP::</h1><br/>";
		echo "Resulado da Operação: ".$resultado;
	} elseif ($resultado == 0) {
		echo "<h1>::Calculadora em PHP::</h1><br/>";
		echo "Atenção: Digite um número diferente de zero e positivo!";
	}
	
?>