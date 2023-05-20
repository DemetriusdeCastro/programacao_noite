<?php

$valor1= 200;
$valor2= 147;

$soma = $valor1 + $valor2;

if ($soma % 2 == 0) {
	$multiplicado = $soma*$valor1;
	if ($multiplicado %2 == 0) {
		if ($multiplicado >= 100) {
			$string = strval($multiplicado);
			$quebrado = intval($string[0] + $string[1] + $string[2]);
			if (strlen($quebrado) > 1){
				$nova_string = strval($quebrado);
				$um_digito = intval($nova_string[0] + $nova_string[1]);
				echo $um_digito;
			} else {
				echo $quebrado;
			}
		} else {
			echo $multiplicado;
		}
	} else {
		echo "Agora o valor é ímpar";
	}
} else {
	echo "O valor é ímpar";
}

?>