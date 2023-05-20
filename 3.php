<?php

$compra = 5000;
$juros = 1.5 * 12;
$valor_total = $compra + ($compra * ($juros / 100));
$parcela = $valor_total / 12;

echo "Valor total: R$".number_format($valor_total, 2, ',', '.')."<br>";
echo "Valor da parcela: R$".number_format($parcela, 2, ',', '.');

?>