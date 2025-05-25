<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aritmética</title>
    </head>
    <body>
        <?php 

            echo "<h1>Operadores Aritméticos</h1>";
            echo "<ul>";
                echo '<li><h2>Adição: +</h2></li>';
                echo "<ul>";
                    echo "<li>2 + 2 = " . 2+2 . "</li>";
                    echo '<li>"2" + "2" = ' . "2"+"2" . "</li>";
                echo "</ul>";

                echo '<li><h2>Subtração: -</h2></li>';
                echo "<ul>";
                    echo "<li>3 - 2 = " . 3-2 . "</li>";
                    echo '<li>2 - 3 = ' . 2-3 . "</li>";
                echo "</ul>";

                echo '<li><h2>Multiplicação: *</h2></li>';
                echo "<ul>";
                    echo "<li>3 * 2 = " . 3*2 . "</li>";
                echo "</ul>";

                echo '<li><h2>Divisão Real: /</h2></li>';
                echo "<ul>";
                    echo "<li>15 * 2 = " . 15/2 . "</li>";
                echo "</ul>";

                echo '<li><h2>Módulo (resto): %</h2></li>';
                echo "<ul>";
                    echo "<li>15 % 2 = " . 15%2 . "</li>";
                echo "</ul>";

                echo '<li><h2>Exponenciação: **</h2></li>';
                echo "<ul>";
                    echo "<li>3 ** 2 = " . 3**2 . "</li>";
                echo "</ul>";

            echo "</ul>";


            echo "<h1>Funções Aritméticos</h1>";
            echo "<ul>";

                echo '<li><h2>Valor Absoluto: abs()</h2></li>';
                echo "<ul>";
                    echo "<li>abs(-2000) = " . abs(-2000) . "</li>";
                echo "</ul>";

                echo '<li><h2>Conversão de bases: base_convert(valor, base_do_valor, base_conversão)</h2></li>';
                echo "<ul>";
                    echo "<li>base_convert(254, 10, 8) = " . base_convert(254, 10, 8) . "</li>";
                    echo "<li>base_convert(100, 2, 10) = " . base_convert(100, 2, 10) . "</li>";
                    echo "<li>base_convert(4, 10, 2) = " . base_convert(4, 10, 2) . "</li>";
                    echo "<li>base_convert(100, 5, 11) = " . base_convert(100, 5, 11) . "</li>";
                echo "</ul>";

                echo '<li><h2>Arredondamento: ceil(), floor(), round()</h2></li>';
                echo "<ul>";
                    echo "<li>para cima ceil(2.6) = " . ceil(2.6)  . "</li>";
                    echo "<li>para baixo floor(2.6) = " . floor(2.6)  . "</li>";
                    echo "<li>arrendondamento round(valor, precisão) </li>";
                    echo "<ul>";
                        echo "<li>round(1356.783, 4) = " . round(1356.783, 4)  . "</li>";
                        echo "<li>round(1356.783, 3) = " . round(1356.783, 3)  . "</li>";
                        echo "<li>round(1356.783, 2) = " . round(1356.783, 2)  . "</li>";
                        echo "<li>round(1356.783, 1) = " . round(1356.783, 1)  . "</li>";
                        echo "<li>round(1356.783, 0) = " . round(1356.783, 0)  . "</li>";
                        echo "<li>round(1356.783, -1) = " . round(1356.783, -1)  . "</li>";
                        echo "<li>round(1356.783, -2) = " . round(1356.783, -2)  . "</li>";
                        echo "<li>round(1356.783, -3) = " . round(1356.783, -3)  . "</li>";
                        echo "<li>round(1356.783, -4) = " . round(1356.783, -4)  . "</li>";
                    echo "</ul>";
                echo "</ul>";

                echo '<li><h2>Raiz Quadrada: sqrt()</h2></li>';
                echo "<ul>";
                    echo "<li>sqrt(81) = " . sqrt(81) . "</li>";
                echo "</ul>";

                echo '<li><h2>Divisão Inteira: intdiv()</h2></li>';
                echo "<ul>";
                    echo "<li>intdiv(15, 2) = " . intdiv(15, 2) . "</li>";
                echo "</ul>";

                echo '<li><h2>Módulo (resto) Divisão Ponto Flutuante: fmod()</h2></li>';
                echo "<ul>";
                    echo "<li>fmod(5.4, 1.3) = " . fmod(5.4, 1.3) . "</li>";
                echo "</ul>";

            echo "</ul>";

            echo "<h1>Ordem de Operadores</h1>";
            echo "<ul>";
                echo '<li>( )</li>';
                echo '<li>**</li>';
                echo '<li>*, /, %</li>';
                echo '<li>-, -</li>';     
            echo "</ul>";

            
 
        ?>
    </body>
</html>