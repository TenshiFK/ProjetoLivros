<?php

require '../../validador_acesso.php';

$acao = 'recuperarLivroId';
require '../controllers/books_controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Genérico - Editar Livro</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/styleForms.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <style>
        .titulo-paginas{
            font-size: 28px;
            color: #004647;
            font-weight: 700;
        }

        .btn-addLivro{
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
    
    <button class="btn-voltar m-4"><a href="./home.php">voltar</a></button>

    <main class="main-Home d-flex flex-column justify-content-left align-items-center">
        <h1 class="titulo-paginas">Editar livro:</h1>
        
        <form class="livro" method="post" action="./../controllers/books_controller.php?acao=atualizarLivro">
            <input type="hidden" id="id" name="id" value="<?= $livroDetalhes->id ?>">
            <div class="forms">
                <input type="text" id="nomeLivro" name="nomeLivro" value="<?= $livroDetalhes->nomeLivro ?>" required>
            </div>

            <div class="forms">
                <input type="text" id="autor" name="autor" value="<?= $livroDetalhes->autor ?>" required>
            </div>

            <div class="forms">
                <select id="estadoLivro" name="estado">
                    <option value="" disabled <?= $livroDetalhes->estado == '' ? 'selected' : '' ?>>Estado do Livro</option>
                    <option value="Novo" <?= $livroDetalhes->estado == 'Novo' ? 'selected' : '' ?>>Novo</option>
                    <option value="Usado" <?= $livroDetalhes->estado == 'Usado' ? 'selected' : '' ?>>Usado</option>
                </select>
            </div>

            <div class="forms">
                <select id="generoLivro" name="genero">
                    <option value="" disabled <?= $livroDetalhes->genero == '' ? 'selected' : '' ?>>Gênero do Livro</option>
                    <option value="Romance" <?= $livroDetalhes->genero == 'Romance' ? 'selected' : '' ?>>Romance</option>
                    <option value="Acao" <?= $livroDetalhes->genero == 'Acao' ? 'selected' : '' ?>>Ação</option>
                    <option value="Aventura" <?= $livroDetalhes->genero == 'Aventura' ? 'selected' : '' ?>>Aventura</option>
                    <option value="Ficcao" <?= $livroDetalhes->genero == 'Ficcao' ? 'selected' : '' ?>>Ficção</option>
                    <option value="Terror" <?= $livroDetalhes->genero == 'Terror' ? 'selected' : '' ?>>Terror</option>
                    <option value="Drama" <?= $livroDetalhes->genero == 'Drama' ? 'selected' : '' ?>>Drama</option>
                    <option value="Outros" <?= $livroDetalhes->genero == 'Outros' ? 'selected' : '' ?>>Outros</option>
                </select>
            </div>

            <div class="forms">
                <input type="url" id="urlImg" name="urlImg" value="<?= $livroDetalhes->urlImg ?>">
            </div>

            <div class="forms">
                <textarea id="sinopse" name="sinopse" rows="5" value="<?= $livroDetalhes->sinopse ?>"><?= $livroDetalhes->sinopse ?></textarea>
            </div>

            <button class="btn-Troca btn-addLivro" type="submit"> Salvar </button>
        </form>

    </main>

    <footer class="rodape">
        <p>© Copyright 2024 Genérico Livros</p>
    </footer>
</body>
</html>