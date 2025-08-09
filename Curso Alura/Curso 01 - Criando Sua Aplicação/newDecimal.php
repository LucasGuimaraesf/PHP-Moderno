//<?php

//Com a imprecisão:
//ini_set('precision', 17);
//var_dump(0.1 + 0.2);

//Resolvendo o problema de precisão com Decimal Types - Precisa habilitar:
//$a = new Decimal('0.1');
//$b = new Decimal('0.3');
//echo $a + $b;

require 'vendor/autoload.php'; // Carrega automaticamente a biblioteca

use Brick\Math\BigDecimal;

$valor1 = BigDecimal::of('0.1');
$valor2 = BigDecimal::of('0.2');

$resultado1 = $valor1->plus($valor2);

echo $resultado1->toScale(17).PHP_EOL; // saída correta: 0.3 (sem erro de ponto flutuante)

ini_set('precision', 17);
var_dump(0.1 + 0.2);