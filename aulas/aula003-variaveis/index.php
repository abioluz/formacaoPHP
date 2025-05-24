<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <?php 
        $nome = "Abioluz Robson";
        $sobrenome = "Behrend";
        const PAIS = "Brasil"; # constantes

        echo "Muito prazer $sobrenome, $nome! Você mora no " . PAIS;
    ?>
</body>
</html>