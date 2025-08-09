<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Resposta</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
        <?php 
            $numero = $_GET["num"] ?? 0;
            $numanterior = $numero - 1;
            $numposterior = $numero + 1;
            print "O número escolhido foi  <strong>$numero</strong>";
            print " <br>O número anterior é $numanterior";
            print "<br>O número posterior é $numposterior";
        ?>
        </p>
        <!--Usando o histórico do navegador para voltar a página anterior-->
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>

</body>
</html>