<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1> 
        <?php 
            //Declarando o minimo e o maximo
            $min = 0;
            $max = 100;

            //Criando a função mais antiga de random (Linear Congrential Gererator - 1951)
            //Não é tão confiável e lenta
            // $nrandon = rand($min , $max);
            // O mínimo e o máximo NÃO PRECISAM estar em ordem crescente !

            //Usando a opção mais confiável e 4x mais rápida:
            // mt_rand() - Mersenne Twister - 1997
            // o mínimo e o máximo PRECISAM estar em ORDEM CRESCENTE!
            
           $nrandon = mt_rand($min,$max);

            //
            echo "Gerando um número aleatório entre 0 e 100...<br>";
            echo "O número gerado foi <strong>$nrandon</strong>.";
        ?>
        <!-- Gerando a partir do histórico anterior-->
        <!--<button onclick="javascript:history.go(-1)">Resetar</button>-->
        
        <!-- Gerando o código a partir do reload da página-->
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar Número</button>

    </main>
    
</body>
</html>