<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo Cad.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET["numero"];
    $funabs = abs($numero);
    print("O resultado é $funabs");

    ?>
    <?php $base = $_GET["valor"];
    $bconvet = base_convert($base, 10, 2);
    print("O resultado da função base_convert é $bconvet.")
    ?>
</body>
</html>