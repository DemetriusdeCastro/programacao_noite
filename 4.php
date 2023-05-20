<?php

$valor1 = 10;
$valor2 = 20;
$operador = "j";

switch ($operador) {
	case '+':
		echo $valor1 + $valor2;
		break;
	case '-':
		echo $valor1 - $valor2;
		break;
	case '*':
		echo $valor1 * $valor2;
		break;
	case '/':
		echo $valor1 / $valor2;
		break;
	default:
		echo "Operador inválido";
		break;
}

?>