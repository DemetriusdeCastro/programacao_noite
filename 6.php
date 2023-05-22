<!--

6º Escreva um código que receba um valor entre 1 e 26 e informe a respectiva letra do alfabeto. Caso o usuário informe um valor fora do intervalo, informar que o valor é inválido.

-->

<?php

$valor = 26;

if ($valor <= 26) {
$alfabeto = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

echo "A letra <b>".$alfabeto[$valor - 1]."</b> é a ".$valor." º letra do alfabeto";
} else {
	echo "Valor inválido";
}

?>