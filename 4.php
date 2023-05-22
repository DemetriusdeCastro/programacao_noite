<!--

4º Escreva um código que receba dois valores inteiro e um caractere. De acordo com o caractere informado, realize a operação matemática correspondente. Caso o usuário digite um caractere que não seja matemático, informar que o caractere é inválido.

-->

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