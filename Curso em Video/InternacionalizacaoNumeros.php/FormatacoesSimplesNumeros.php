<?php 
    //Cotação copiada do Google
    $cotacao = 5.17;

    //Quanto $$ voce tem?
    $real = 1000;

    //Equivalência em dólar
    $dolar = $real / $cotacao;

    //Mostrar o resultado
    echo "Seus R\$" . number_format($real, 2, ",",".") . " equivalem a US\$" . number_format($dolar, 2, ",",".");
?>