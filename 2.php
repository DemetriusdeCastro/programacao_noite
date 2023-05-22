<!--

2º Escreva um código que receba três valores inteiros, faça sua soma e escreva a sua sequência para o usuário, em ordem decrescente.

-->

<?php

$valor1 = 10;
$valor2 = 5;
$valor3 = 2;
$soma = $valor1 + $valor2 + $valor3;

for ($i = $soma; $i >= 0; $i--) {
	echo $i."<br>";
}

?>