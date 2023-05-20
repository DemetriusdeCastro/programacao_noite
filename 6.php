<?php

$valor = 26;

if ($valor <= 26) {
$alfabeto = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

echo "A letra <b>".$alfabeto[$valor - 1]."</b> é a ".$valor." º letra do alfabeto";
} else {
	echo "Valor inválido";
}

?>