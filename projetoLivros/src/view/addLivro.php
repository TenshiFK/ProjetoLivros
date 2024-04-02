<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Genérico - Cadastro</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styleCadastro.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styleLogin.css">


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

        .livros {
            width: 250px;
        }

        .forms {
            margin-bottom: 12px;
            border-color: #FF9279;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="url"], textarea,select {
            width: 100%;
            padding: 10px;
            border: 1.5px solid #FF9279;
            border-radius: 10px;
            font-size: 16px;
        }

        input[type="text"], input[type="url"], textarea,select:focus {
            border-color: #FF9279;
            outline: none;
        }

        textarea {
            resize: vertical;
        }

        select {
            background-size: 20px;
            color: #FF9279;
            width: 430px;
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
        <h1 class="titulo-paginas">Cadastro de novo livro:</h1>
        <form class="livro">
            <div class="forms">
                <input type="text" id="NomeLivro" name="NomeLivro" placeholder="Nome do Livro" required>
            </div>

            <div class="forms">
                <input type="text" id="autor" name="autor" placeholder="Autor" required>
            </div>

            <div class="forms">
                <select id="estadoLivro" name="estadoLivro" required>
                    <option value="" disabled selected>Estado do Livro</option>
                    <option value="">Novo</option>
                    <option value="">Usado</option>
                </select>
            </div>

            <div class="forms">
                <select id="estadoLivro" name="genero" required>
                    <option value="" disabled selected>Gênero do Livro</option>
                    <option value="Romance">Romance</option>
                    <option value="Acao">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Ficcao">Ficção</option>
                    <option value="Terror">Terror</option>
                    <option value="Drama">Drama</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>

            <div class="forms">
                <input type="url" id="" name="" placeholder="URL da Foto">
            </div>

            <div class="forms">
                <textarea id="sinopse" name="sinopse" rows="5" placeholder="Sinopse"></textarea>
            </div>

            <button class="btn-Troca btn-addLivro">Adicionar Livro</button>
        </form>

    </main>

    <footer class="rodape">
        <p>© Copyright 2024 Genérico Livros</p>
    </footer>
</body>
</html>