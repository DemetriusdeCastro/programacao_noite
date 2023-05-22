<!--	

Vale lembrar que essa não é a melhor forma de resolver essa questão, mas como voçês 		ainda não viram funções e outros comandos, essa é a melhor forma de resolver com as aulas dadas

7º Escreva um código que receba dois valores inteiros e faça a sua soma. Caso o valor 		seja ímpar, informar que o valor é ímpar, caso o valor seja par, multiplicar o valor 		pelo primeiro número. Caso agora seja ímpar, informar que agora o valor é ímpar, caso 		esse continue sendo par, verificar se ele é maior ou igual a 100. Caso seja menor que 		100, informar o valor, caso seja maior que 100, faça a soma dos seus algarismos até que 	seja reduzindo a um dígito e exiba para o usuário. 

-->

<?php

$valor1= 400;
$valor2= 128;

$soma = $valor1 + $valor2;

if ($soma % 2 == 0) {
	$multiplicado = $soma*$valor1;
	if ($multiplicado %2 == 0) {
		if ($multiplicado >= 100) {
			$string = strval($multiplicado);
			$valor = 0;
			for ($i = 0; $i < strlen($string); $i++) {
				$valor += intval($string[$i]);
			}
			$stringnova = strval($valor);
			if ($stringnova <= 1) {
				echo $valor;
			} else {
				$novo = 0;
				for ($j=0; $j < strlen($valor); $j++) { 
					$novo += intval($stringnova[$j]);
				}
				echo $novo;
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