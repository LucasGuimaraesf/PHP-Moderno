<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando Strings</title>
</head>
<body>
    <h1> Strings </h1>
    <h2>Double Quoted</h2>
    <p>A double quoted <strong>possui a interpretação do conteúdo!</strong></p>
    <p>Usando "Curso" . "PHP" temos o resultado abaixo:</p>
    <?php 
        echo "Curso" . "PHP"

    ?>
    
    <p>ASPAS DUPLAS : "PHP \u{1F1419}" -> Teremos o resultado abaixo:</p>
    <?php 
        echo "PHP \u{1F418}"
    ?>
    <h2>Single Quoted</h2>
    <p>O single quoted <strong>não possui interpretação!</strong></p>
    <p>ASPAS SIMPLES : 'PHP \u{1F1419}' -> Teremos o resultado abaixo:</p>
    <?php 
        echo 'PHP \u{1F1419}'
    ?>
    <h3>Exemplos com variáveis</h3>
    <p>Double Quoted (Aspas Duplas):</p>
    <?php 
        $nome = "Gustavo";
        echo "Olá $nome!"; //Olá Gustavo !
        echo 'Olá $nome!'; //Olá $nome!
    ?>
    <p>
    $nome = "Gustavo"; <br>
        echo "Olá $nome!"; RESPOSTA: Olá Gustavo ! - <strong>INTERPRETOU</strong><br>
        echo 'Olá $nome!'; RESPOSTA: Olá $nome! - <strong>NÃO INTERPRETOU</strong>
    </p>
    <h3>Exemplos com Constantes (const):</h3>
    <p>
        const estado = "RJ"; <br>
        echo "Moro no estado" = Moro no estado - <strong>NÃO FUNCIONOU NA CONST</strong><br>
        echo 'Moro no estado' = Moro no estado - <strong>NÃO FUNCIONOU NA CONST</strong><br>
        echo "Moro no" . estado; = Moro no RJ - <strong>FUNCIONOU !!!</strong><br>
    </p>
    <p>Fazendo o código:</p>
    <?php 
        const estado ="RJ";
        echo "Moro no estado //"; 
        echo 'Moro no estado //'; 
        echo "Moro no " . estado;

    ?>
    <br>
    <?php 
        $nome= "Rodrigo";
        $snome= "Nogueira";
        echo '$nome" Minotauro "$snome';
    ?>

    <h3>O jeito certo de fazer sequência de escape \" ... \"</h3>
    <?php 
        $nome = "Lucas";
        $snome = "Guimarães";
        echo "$nome \" Luck \" $snome";
        echo "$nome \n \t \"Luck\" $nome";
    ?>

<h3>Sintaxe Heredoc</h3>
<p><code>echo <<< TESTE </code></p>
<p> Escrever o que será exibido</p>
<p><code>TESTE;</code></p>
<p>É necessário tomar cuidado com a indentação</p>
<?php 
$canal = "Curso em Vídeo";
$ano = date('Y');
echo <<< TESTE
    Olá galera do $canal !
          Tudo bem com vocês ?
        Como está sendo esse ano de $ano?
    Abraços! \u{1f596}
TESTE;
            
    ?>
    <p></p>
</body>
</html>