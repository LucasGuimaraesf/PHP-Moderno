<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $valor = $_GET["valor"];
            $vdolar = $valor / 5.66;
            echo "<p>O valor $valor convertido em dólar é de $vdolar. </p>"
        ?>
    </main>
    
</body>
</html>