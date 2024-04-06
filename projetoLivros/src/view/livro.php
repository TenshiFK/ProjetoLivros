<?php

$acao = 'recuperarLivroId';
require '../controllers/books_controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Genérico - Trocar Livro</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styleCadastro.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styleLogin.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <style>
        .info-livro{
            border: solid 1px #138C8E;
            padding: 10px;
            width: 100%;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        .btn-addLivro{
            margin-top: 20px;
            width: fit-content;
            font-size: 16px;
            padding: 10px;
        }

    </style>

</head>
<body>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-lg navBar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto mb-2 mb-lg-0" href="#">
                    <img src="../../assets/img/Group 4.png" height="60"alt="Logo">
                </a>
                <form class="d-flex" role="search">
                    <button class="btn-Cadastro" type="submit"><a href="../../logoff.php">Sair</a></button>
                </form>
                </div>
            </div>
        </nav>
    </div> 
    
    <button class="btn-voltar m-4"><a href="../../index.php">voltar</a></button>

    <main class="main-Home">
        <div class="d-flex pb-4">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <img src="<?= $livroDetalhes->urlImg ?>" width="420" height="460" alt="">
                <button class="btn-Troca btn-addLivro">Entrar em Contato</button>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-between">
                <div class="info-livro">
                    <?= $livroDetalhes->nomeLivro ?>
                </div>
                <div class="info-livro">
                    <?= $livroDetalhes->autor ?>
                </div>
                <div class="info-livro">
                    <?= $livroDetalhes->estado ?>
                </div>
                <div class="info-livro">
                    <?= $livroDetalhes->genero ?>
                </div>
                <div class="info-livro">
                    <?= $livroDetalhes->sinopse ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="rodape">
        <p>© Copyright 2024 Genérico Livros</p>
    </footer>
</body>
</html>