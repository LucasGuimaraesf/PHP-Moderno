<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //variável que ja vem declarada
            //var_dump($_GET);
            //Se tirarmos da URL as variáveis
            $nome = $_GET["nome"] ?? " ERRO - Nome não digitado";
            $sobrenome = $_GET["sobrenome"] ?? "ERRO - Sobrenome não digitado";
            echo "<p> É um prazer te conhecer $nome $sobrenome. Este é o meu site! ";

            //Colocando na variável não declarada a mensagem padrão
            //$nome = (!empty($_GET["nome"])) ? $_GET["nome"] : "ERRO - Nome não digitado";
            //$sobrenome = (!empty($_GET["sobrenome"])) ? $_GET["sobrenome"] : "ERRO - Sobrenome não digitado";

        ?>
        <p><a href="index.html">Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>