<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manipulação de Strings</title>
    </head>
    <body>
        <?php 

            $nome = "Abioluz";

            echo "<h1>Quatro formatos de Strings</h1>";
            echo "<ul>";
                echo "<li>Double quoted -> \"Aspas Duplas\"</li>";
                    echo "<ul>";
                    echo "<li>Converte caraceres especiais: \u{1F418}</li>";
                    echo "<li>Reconece escapes: \"escape\"</li>";
                    echo "<li>Aceita as variáveis dentro das aspas \$nome: $nome</li>";
                    echo "<li>Aceita 'aspas simples sem escapes'</li>";
                    echo "</ul>";
            echo "</ul>";

            echo "<ul>";
                echo "<li>Single quoted -> 'Aspas Simples'</li>";
                    echo "<ul>";
                        echo '<li>NÃO converte caraceres especiais: \u{1F418} </li>';
                        echo '<li>NÃO Reconece escapes: \"escape\"</li>';
                        echo '<li>NÃO aceita as variáveis dentro das aspas \$nome: $nome</li>';
                        echo '<li>Aceita "aspas duplas sem escapes"</li>';
                    echo "</ul>";
            echo "</ul>";

            echo "<ul>";
                echo "<li>Heredoc -> \"<<< MARCADOR\"</li>";
                    echo "<ul>";
                        echo '<li>Por padrão necessita de um marcador para indicar o inicio e o final do bloco: <<< MARCADOR </li>';

                        echo <<< MARCADOR
                        <li>echo <<< ABC
                        <pre>&#60pre&#62
                            Teste\n123
                            456
                                789
                                \$nome: $nome
                            120
                            \u{1F418}
                        &#60/pre&#62</pre>
                        ABC;</li>
                        MARCADOR;

                        echo "<li>Para deixar os formatado bonito no HTML, usa-se as tag's \"&#60pre&#62 &#60/pre&#62\"</li>";
                    echo "</ul>";
            echo "</ul>";

            echo "<ul>";
                echo "<li>Nowdoc -> \"<<< 'MARCADOR'\"</li>";
                    echo "<ul>";
                        echo "<li>O Marcador do bloco possui aspas simples: <<< 'MARCADOR' </li>";

                        echo <<< 'MARCADOR'
                        <li>echo <<< 'ABC'
                        <pre>&#60pre&#62
                            Teste\n123
                            456
                                789
                                \$nome: $nome
                            120
                            \u{1F418}
                        &#60/pre&#62</pre>
                        ABC;</li>
                        MARCADOR;

                    echo "</ul>";
            echo "</ul>";
 
        ?>
    </body>
</html>