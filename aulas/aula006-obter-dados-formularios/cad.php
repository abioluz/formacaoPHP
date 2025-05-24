<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Resultados</title>
</head>

<body>
    <div class="container-fluid text-center">
        <header>
            <h1>
                Resultado do processamento
            </h1>
        </header>

        <main>
            <div class="row row-cols-3 justify-content-md-center">
                <div class="col-md-auto">
                    <div class="mb-3">
                        <?php
                            $nome = $_GET['nome'];
                            $sobrenome = $_GET['sobrenome'];
                            echo "<p>Olá, <strong>$nome $sobrenome</strong>, seja bem vindo!</p>";
                        ?>
                    </div>
                    <div class="mb-3">
                        <p>
                            <a href="javascript:history.go(-1)">Voltar para página anterior</a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>