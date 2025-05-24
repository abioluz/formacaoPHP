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

        $nome_sobrenome = $nome . " " . $sobrenome; 

        $idade = 39; 
        $peso = 98.6;
        $casado = false;

        const PAIS = "Brasil"; # constantes

        print "Muito \nprazer $sobrenome, $nome! Você mora no " . PAIS;
        echo "Muito prazer $nome_sobrenome! Você mora no " . PAIS;
    ?>
</body>
</html>