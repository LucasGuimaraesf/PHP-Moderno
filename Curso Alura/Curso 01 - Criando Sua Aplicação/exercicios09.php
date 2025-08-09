<?php

//1 - Escreva um programa em PHP que exiba seu nome na tela.

$nome = "Lucas Guimarães Fabrício";
echo "Bem-vindo $nome";

//2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$nota1 = 10;
$nota2 = 9.3;
$nota3 = 8.3;
$mediaNotas = $nota1 + $nota2 + $nota3 / 3;
echo "\nA média das notas foi de ". round($mediaNotas,2); //Exibirá apenas 2 números após a vírgula

//3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
echo "\nQual valor em metros deseja converter em centímetros? ";
$metros = readline();
$conversao = $metros * 100;
echo "Calculando...\n";
echo "O valor $metros metros convertido em centímetros é de $conversao cm\n";

//4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

function anoB(){
    $anoBissexto = 366;
    $anoNormal = 365;
    echo "\nQuantos dias tem o ano atual? ";
    $resp = readline();
        if ($resp == $anoBissexto) {
            echo "\nVocê está em um ano Bissexto";
            echo "\n O próximo ano bissexto será em 4 anos";
        } elseif ($resp == $anoNormal) {
            echo "\nVocê não está em um ano Bissexto";
        } else {
            echo "\nVocê não digitou a quantidade certa de dias que o ano tem";
            echo "\nTente novamente!";
        }
}
anoB();
//5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
