<?php
// $numero = 0;
// while ($numero < 100){
//     $numero += 2;
//     echo $numero;
// }


//Mostrando apenas números ímpares:
function Impares(){
    echo "Contando números pares: ";
    $numero = 0;
    while ($numero <= 100){
        if ($numero % 2 != 0){
            echo $numero .' ' ;
        }
        $numero++;
    }
}

//Mostrando apenas números pares:
function Pares(){
    echo "\nContando números ímpares: ";
    $numeroPar = 0;
    while ($numeroPar <= 100){
        if ($numeroPar % 2 == 0){
            echo "$numeroPar ";
        }
        $numeroPar++;
    }
}
    
Impares();
Pares();
