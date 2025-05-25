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
    <title>Conversor de Moedas</title>
</head>
<body>
    <header class="container-fluid text-center py-3 bg-light">
        <p class="h3">Conversor de Moedas V1.0</p>
    </header>

    <main class="container-fluid text-center my-5">
        <?php
            $resposta = file_get_contents('https://economia.awesomeapi.com.br/last/USD-BRL');
            $resposta = json_decode($resposta, true);
            $valor = (float) $_GET["valor"] ?? 0;
            $dollar_cotacao = (float) $resposta["USDBRL"]['bid'];
            $data_cotacao = (string) $resposta['USDBRL']['create_date'];
            $dollar = $valor / $dollar_cotacao;

            $valor = number_format($valor, 2, ",", ".");
            $dollar = number_format($dollar, 2, ",", ".");
            $dollar_cotacao = number_format($dollar_cotacao, 4, ",", ".");

            echo "<p>Seus R$ $valor equivalem a US$ $dollar</p>";
            echo "<p><strong>Cotação fixa de R$ $dollar_cotacao</strong> em $data_cotacao</p>";
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