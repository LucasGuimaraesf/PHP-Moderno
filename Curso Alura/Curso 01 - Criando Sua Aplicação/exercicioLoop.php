<?php 
$nomeFilme = 'Jovens Titãns';
$genero = 'Animação';
$notas = 0;

for ($contador = 1; $contador < count($argv); $contador ++){
    $somaNotas += $argv[$contador];
}
$mediaNotas = $somaNotas / ($contador -1);
echo $mediaNotas;
