<?php
//Pega as informações da linha de comando. Nesse caso está selecionando o item na posição 1
$nomeLancamento = $argv[1] ?? 2022; // Usando o Operador ?? - Se o que esta na ESQUERDA FOR NULO, o que está na DIREITA será UTILIZADO
echo "Ano de lançamento: $nomeLancamento";

echo "\nIniciando exercício proposto";



$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor Ragnarok";
$nomeFilme = "Se beber não case";

$quantidadeDeNotas = $argc - 1;//argc -1 vai retirar o nome do arquivo e deixar os outros parâmetros
$somaNotas = 0;

// for ($contador = 1; $contador < $argc; $contador ++){
//     $somaNotas += $argv[$contador];
// }


$contador = 1;
while ($argv[$contador]!= 0){
    $somaNotas += $argv[$contador++];
}

// Faça {}; Enquanto() for verdadeira (TRUE)
// do {
//     Alguma coisa
// } while(condição);

$notaFilme = $somaNotas / $quantidadeDeNotas;

$anoLancamento1 = 2012;  
echo "\nVocê possui assinatura? [sim]/[não]";
$assinatura = readline();
    if ($assinatura == 'sim'){
        echo "\nNome do filme: $nomeFilme";
        echo "\nAno lançamento: $anoLancamento1";
        echo "\nNota do Filme: ". round($notaFilme, 2); //Exibirá o número com 2 casa decimais após a vírgula

        //Uma expressão que compara valores
        $genero = match ($nomeFilme) {
            "Top Gun - Maverick" => "Ação",
            "Thor Ragnarok" => "Super-Heroi",
            "Se beber não case" => "Comédia",
            default => "Desconhecido",
        };

        echo "\nO gênero do filme é: $genero";
    } else {
        echo "\nVocê precisa ser assinante para acessar o conteúdo\n";
    }
echo "\nO argc recebeu $argc valores na linha de comando"; //Contém o número de parâmetros passados na linha de comando