<?php
date_default_timezone_set('America/Sao_Paulo'); //Configura o fuso horário de São Paulo, por padrão vem o horário do servidor
$date = date('H'); //Definindo apenas as horas da data

$time = [
    '1' => 'Bom dia',
    '2' => 'Boa Tarde',
    '3' => 'Boa Noite',
];

if (($date >= 6) && ($date <= 12)){
    echo $time['1'];
    echo "\n São exatamente ". date('H:i:s');
} elseif (($date > 12) && ($date < 18)){
    echo $time['2'];
    echo "\nSão exatamente ". date('H:i:s');
} else {
    echo $time['3'];
    echo "\nSão exatamente ". date('H:i:s');
}

//Funcionamento do var_dump:
$notas = [
        10,
        2, 
        3, 
        1, 
        5];  
var_dump($notas[0]);

//Array Associativo:
$infoMove = [
    'name' => 'Duna',
    'ano' => '2022',
    'nota' => '9.8',
    'genero' => 'Ação',
];
echo $infoMove['name']. '-' . $infoMove['ano'];

//Adicionando 5 itens em um array
echo "\nAdicionando itens no Array";
$notas = [];
for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}
var_dump($notas);
