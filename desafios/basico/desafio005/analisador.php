<!DOCTYPE html>
<!-- inspirado em: <https://cursos.alura.com.br/forum/topico-duvida-estrtura-automatica-do-html-405099> -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Descomentar para habilitar 
    <link rel="shortcut icon" href="/favicon.ico" type="image/ico"> 

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Analizador de Números Reais</title>
</head>
<body>
    <header class="container-fluid text-center py-3 bg-light">
        <p class="h3">Analizador de Números Reais</p>
    </header>

    <main class="container-fluid text-center my-5">
        <?php
            $valor = (float) $_GET["numero"] ?? 0;
            $inteiro = (int) $valor;

            $fracionaria = number_format($valor - $inteiro, 3, ",", ".");
            $valor = number_format($valor, 3, ",", ".");
            $inteiro = number_format($inteiro, 3, ",", ".");


            echo "Analisamos o número <strong>$valor</strong> informado pelo usuário:";
            echo "<ul><li>A parte inteira do número é: <strong>$inteiro</strong></li>";
            echo "<li>A parte fracionária do número é: <strong>$fracionaria</strong></li></ul>";
        ?>
    </main>

    <footer class="container-fluid text-center py-3 bg-light">
        <p class="h5">
            <a href="javascript:history.go(-1)">Voltar para página anterior</a>
        </p>
    </footer>

    <!-- Inicio script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <!-- 
    descomentar se necessitar de dropdowns, popovers ou tooltips

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
    -->

    <!-- Fim do script do Bootstrap -->
</body>
</html>