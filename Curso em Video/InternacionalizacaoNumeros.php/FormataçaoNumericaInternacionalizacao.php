<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas Internalcional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            //Cotação copiada do Google
            $cotacao = 5.17;

            //Quanto $$ voce tem?
            $real = $_GET["din"] ?? 0;

            //Equivalência em dólar
            $dolar = $real / $cotacao;

            #Criando o Padrão
            #pt_BR -> Idioma que está o site
            #NumberFormatter::CURRENCY -> Que tipo de número iremos formatar
            //Biblioteca intl (Internallization PHP) -> Funciona em servidores!
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //Mostrar o resultado
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

            //Para ativar a funcionalidade do Currency no servidor local é preciso alterar o arquivo php.ini
        ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>