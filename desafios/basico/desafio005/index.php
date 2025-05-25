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
    <title>Analisador de Números Reais</title>
</head>
<body class="bg-body-tertiary">
    <header class="container-fluid text-center py-3 bg-light">
        <p class="h3">Analisador de Números Reais</p>
    </header>

    <main class="form-signin w-100 m-auto">
        <div class="row row-cols-3 justify-content-md-center">
            <form action="analisador.php" method="get" class="form-floating">
                <div class="form-floating">
                    <input type="number" name="numero" id="idnumero" step="0.001" class="form-control">
                    <label for="numero">Número Real:</label>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Analisar!!</button>
            </form>
        </div>
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