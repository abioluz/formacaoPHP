<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitiveis</title>
</head>
<body>
    <?php 
        echo "<h1>Reconhecer os tipos primitivos no PHP</h1><br>";
        echo "<br><h2>String</h2><br><ul>";
        echo "<li>string -> \"Abioluz\": "; var_dump("Abioluz"); echo "</li></ul><br>";
        

        # Int ou Integer
        echo "<br><h2>Int ou Integer</h2><br><ul>";
        echo "<li>decimal -> 39: "; var_dump(39); echo "</li><br>";
        echo "<li>hexadecimal -> 0x1A: " ; var_dump(0x1A) ; echo "</li><br>";
        echo "<li>binário -> 0b1011: " ; var_dump(0b1011) ; echo "</li><br>";
        echo "<li>octa -> 010: " ; var_dump(010) ; echo "</li><br>";
        echo "<li>decimal -> 0o10: " ; var_dump(0o10) ; echo "</li></ul><br>";



        echo "<br><h2>float, double e o real (deixou de existir a pertir do 7.4)</h2><br><ul>";
        echo "<li>ponto flutuante -> 85.9: "; var_dump(85.9); echo "</li><br>";
        echo "<li>ponto flutuante -> (0.1+0.7)*10: "; var_dump((0.1+0.7)*10); echo "</li><br>"; # Retorna 7, então o PHP também possui o problema do pronto flutuante, mas esconde bem podendo gerar um equivoco.
        echo "<li>exponencial -> 3e2: "; var_dump(3e2); echo "</li></ul><br>";

        echo "<br><h2>Tipo booleano</h2><br>";
        echo "<li>booleasno -> true: "; var_dump(true); echo "</li><br>";
        echo "<li>booleasno -> True: "; var_dump(True); echo "</li><br>";
        echo "<li>booleasno -> TRue: "; var_dump(TRue); echo "</li><br>";
        echo "<li>booleasno -> TRUE: "; var_dump(TRUE); echo "</li><br>";
        echo "<li>booleasno -> false: "; var_dump(false); echo "</li><br>";

        # Tipo booleano
        $verdadeiro = true;
        $falso = false;
        echo "<li>(true): <$verdadeiro> --- (false): <$falso></li></ul>"; # Cuidado com o true e false pois os mesmos não aparecem na renderização

    ?>
</body>
</html>